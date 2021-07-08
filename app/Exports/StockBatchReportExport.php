<?php
namespace App\Exports;
use App\Http\Resources\StockBatchDatatableResource;
use App\Models\ImportStockDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class StockBatchReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents {

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
                $q->whereHas('importStock',function ($q) {
                    $q->where('branch_id',$this->request->branch);
                });
            }
            if ($this->request->medicine) {
                $q->where('medicine_id',$this->request->medicine);
            }
            if ($this->request->batch_no) {
                $q->where('batch_no','LIKE','%'.$this->request->batch_no.'%');
            }
            $q->where('dispose',0);
        };

        $importStockDetails = ImportStockDetail::with('importStock')->where($filter)->get();

        $importStockDetails = StockBatchDatatableResource::collection($importStockDetails);

        return $importStockDetails;
    }

    public function map($importStockDetail): array
    {
        return [
            $importStockDetail->medicine->name,
            $importStockDetail->medicine->generic_name,
            $importStockDetail->batch_no,
            $importStockDetail->qty,
            date('d-M-Y',strtotime($importStockDetail->expiry_date))
        ];
    }

    public function headings(): array
    {
        return [
            'Medicine',
            'Generic Name',
            'Batch No',
            'Expiry Date',
            'Stock'
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
