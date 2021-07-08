<?php
namespace App\Exports;
use App\Http\Resources\PettyCashReportDatatableResource;
use App\Models\PettyCashDetail;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class PettyCashReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents{
    use Exportable;
    private $request;
    function __construct($request)
    {
        $this->request = $request;
    }
    public function collection()
    {
        $filter = function ($q)  {
            if ($this->request->title) {
                $q->where('title','LIKE','%'.$this->request->title.'%');
            }
            if ($this->request->date_from && $this->request->date_to) {
                $q->whereHas('pettyCash',function ($q) {
                    $q->where('date','>=',date('Y-m-d',strtotime($this->request->date_from)));
                    $q->where('date','<=',date('Y-m-d',strtotime($this->request->date_to)));
                });
            }
        };

        $pettyCashReports = PettyCashDetail::with('pettyCash')->where($filter)->get();
        $pettyCashReports = PettyCashReportDatatableResource::collection($pettyCashReports);

        return $pettyCashReports;
    }
    public function map($pettyCashDetail): array
    {
        $amount = $pettyCashDetail->qty * $pettyCashDetail->price;

        return [
            date('d-M-Y',strtotime($pettyCashDetail->pettyCash->date)),
            $pettyCashDetail->title,
            $pettyCashDetail->qty,
            $pettyCashDetail->price,
            $amount
        ];
    }
    public function headings(): array
    {
        return [
            'Date',
            'Title',
            'Qty',
            'Price($)',
            'Total Amount($)',
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