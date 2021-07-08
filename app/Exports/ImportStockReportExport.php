<?php
namespace App\Exports;
use App\Http\Resources\ImportStockReportDatatableResource;
use App\Models\ImportStockDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ImportStockReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents {

    use Exportable;
    private $request;
    function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $filter = function ($q) {
            if ($this->request->branch) {
                $q->where('branch_id',$this->request->branch);
            }
            if ($this->request->medicine) {
                $q->where('medicine_id',$this->request->medicine);
            }
            if ($this->request->batch_no) {
                $q->where('batch_no','LIKE','%'.$this->request->batch_no.'%');
            }
            $q->whereHas('importStock',function ($q) {
                if ($this->request->supplier) {
                    $q->where('supplier_id',$this->request->supplier);
                }
                if ($this->request->reference_no) {
                    $q->where('reference_no','LIKE','%'.$this->request->reference_no.'%');
                }
                if ($this->request->date_from && $this->request->date_to) {
                    $q->where('date','>=',date('Y-m-d',strtotime($this->request->date_from)));
                    $q->where('date','<=',date('Y-m-d',strtotime($this->request->date_to)));
                }
            });
        };

        $importStockDetails = ImportStockDetail::with('importStock.supplier','importStock.user')->where($filter)->get();

        $importStockDetails = ImportStockReportDatatableResource::collection($importStockDetails);

        return $importStockDetails;
    }

    public function map($importStockDetail): array
    {
        return [
            date('d-M-Y',strtotime($importStockDetail->importStock->date)),
            $importStockDetail->importStock->supplier->name,
            $importStockDetail->importStock->reference_no,
            $importStockDetail->medicine->name,
            $importStockDetail->measurement,
            $importStockDetail->batch_no,
            $importStockDetail->qty,
            date('d-M-Y',strtotime($importStockDetail->expiry_date)),
            $importStockDetail->importStock->user->name
        ];
    }

    public function headings(): array
    {
        return [
            'Date',
            'Supplier',
            'Reference No',
            'Medicine',
            'Measurement',
            'Batch No',
            'Qty',
            'Pics',
            'Expiry Date',
            'Imported By'
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
