<?php
namespace App\Exports;
use App\Http\Resources\StockReportDatatableResource;
use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class StockReportExport implements FromCollection, withMapping, WithHeadings, ShouldAutoSize, WithEvents {

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
            if ($this->request->category) {
                $q->where('category_id',$this->request->category);
            }
            if ($this->request->brand) {
                $q->where('brand_id',$this->request->brand);
            }
            if ($this->request->medicine_type) {
                $q->where('medicine_type_id',$this->request->medicine_type);
            }
            if ($this->request->name) {
                $q->where('name','LIKE','%'.$this->request->name.'%');
            }
            if ($this->request->generic_name) {
                $q->where('generic_name','LIKE','%'.$this->request->generic_name.'%');
            }
            if ($this->request->barcode) {
                $q->where('barcode','LIKE','%'.$this->request->barcode.'%');
            }
        };

        $medicines = Medicine::with('brand','category','medicineType')->where($filter)->notDelete()->get();

        $medicines = StockReportDatatableResource::collection($medicines);

        return $medicines;
    }

    public function map($medicine): array
    {
        return [
            $medicine->barcode,
            $medicine->name,
            $medicine->generic_name,
            $medicine->category->name,
            $medicine->brand ? $medicine->brand->name : 'N/A',
            $medicine->medicineType ? $medicine->medicineType->name : '',
            $medicine->qty
        ];
    }

    public function headings(): array
    {
        return [
            'Barcode',
            'Name',
            'Generic Name',
            'Category',
            'Brand',
            'Type',
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
