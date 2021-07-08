<?php
namespace App\Exports;
use App\Http\Resources\MedicineExpiryDateReportDatatableResource;
use App\Http\Resources\PettyCashReportDatatableResource;
use App\Models\MedicineDispose;
use App\Models\PettyCashDetail;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class MedicineExpiryDateReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents{
    use Exportable;
    private $request;
    function __construct($request)
    {
        $this->request = $request;
    }
    public function collection()
    {
        $filter = function ($q)  {
            if($this->request->medicine){
                $q->where('medicine_id', $this->request->medicine);
            }
            if ($this->request->batch_no) {
                $q->where('batch_no','LIKE','%'.$this->request->batch_no.'%');
            }
            if ($this->request->date_from && $this->request->date_to) {
                    $q->where('date','>=',date('Y-m-d',strtotime($this->request->date_from)));
                    $q->where('date','<=',date('Y-m-d',strtotime($this->request->date_to)));
            }
        };

        $expiryDateReports = MedicineDispose::with('medicine', 'importStock','user')->where($filter)->get();
        $expiryDateReports = MedicineExpiryDateReportDatatableResource::collection($expiryDateReports);

        return $expiryDateReports;
    }
    public function map($expiryDateReport): array
    {
        return [
            date('d-M-Y',strtotime($expiryDateReport->date)),
            $expiryDateReport->medicine->name,
            $expiryDateReport->batch_no,
            date('d-M-Y',strtotime($expiryDateReport->expiry_date)),
            $expiryDateReport->qty,
            $expiryDateReport->user->name,
        ];
    }
    public function headings(): array
    {
        return [
            'Remove Date',
            'Medicine',
            'Batch No',
            'Expiry Date',
            'Stock',
            'Remove by',
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