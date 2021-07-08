<?php
namespace App\Exports;
use App\Http\Resources\SaleReportDatatableResource;
use App\Models\SaleDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class SaleReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents {

    use Exportable;
    private $request;
    function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $filter = function ($q) {
            $q->whereHas('sale',function ($q){
                $q->where('status',0);
                $q->where('full_paid',1);
                if ($this->request->branch) {
                    $q->where('branch_id',$this->request->branch);
                }
                if ($this->request->customer) {
                    $q->where('customer_id',$this->request->customer);
                }
                if ($this->request->cashier) {
                    $q->where('created_by',$this->request->cashier);
                }
                if ($this->request->receipt_no) {
                    $q->where('receipt_no','LIKE','%'.$this->request->receipt_no.'%');
                }
                if ($this->request->date_from && $this->request->date_to) {
                    $q->where('date','>=',date('Y-m-d',strtotime($this->request->date_from)));
                    $q->where('date','<=',date('Y-m-d',strtotime($this->request->date_to)));
                }
            });
        };

        $saleDetails = SaleDetail::with('sale')->notDelete()->where($filter)->get();

        return $saleDetails;
    }

    public function map($saleDetail): array
    {
        $vatAmount = $saleDetail->sub_total * ($saleDetail->vat / 100);
        return [
            $saleDetail->sale->receipt_no,
            $saleDetail->sale->customer ? $saleDetail->sale->customer->name : 'N/A',
            date('d-M-Y h:i',strtotime($saleDetail->sale->date)),
            $saleDetail->medicine->name,
            $saleDetail->batch_no,
            $saleDetail->qty,
            $saleDetail->measurement,
            $saleDetail->special_sale,
            $saleDetail->discount,
            $saleDetail->vat,
            $saleDetail->price,
            ($saleDetail->sub_total + $vatAmount),
            $saleDetail->sale->cashier->name
        ];
    }

    public function headings(): array
    {
        return [
            'Receipt No',
            'Special Customer',
            'Date',
            'Medicine',
            'Batch No',
            'Qty',
            'Measurement',
            'Special Sale',
            'Discount(%)',
            'VAT(%)',
            'Price($)',
            'Total Amount($)',
            'Cashier'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
}
