<?php
namespace App\Exports;
use App\Http\Resources\CashFlowReportDatatableResource;
use App\Models\CashFlowReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class CashFlowReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents {

    use Exportable;
    private $request;
    function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $cashFlowReport = New CashFlowReport();
        $cashFlows = $cashFlowReport->getCashFlows($this->request);
        $cashFlows = $cashFlows->get();
        $cashFlows = CashFlowReportDatatableResource::collection($cashFlows);

        return $cashFlows;
    }

    public function map($cashFlow): array
    {
        return [
            $cashFlow->receipt_no,
            date('d-M-Y', strtotime($cashFlow->date)),
            $cashFlow->status,
            $cashFlow->income_amount ? '$'.$cashFlow->income_amount : '',
            $cashFlow->expend_amount ? '$'.$cashFlow->expend_amount : ''
        ];
    }

    public function headings(): array
    {
        return [
            'Reference No',
            'Date',
            'Status',
            'Income($)',
            'Expend($)'
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
