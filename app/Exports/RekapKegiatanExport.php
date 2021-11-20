<?php

namespace App\Exports;

use App\Models\RekapKegiatan;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

// class RekapKegiatanExport implements FromCollection
class RekapKegiatanExport implements FromView, ShouldAutoSize, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return RekapKegiatan::all();
    // }
    
    public function view(): View
    {
        return view('includes.table.rekap-kegiatan-table', [
            'items' => RekapKegiatan::all()
        ]);
    }
    public function columnWidths(): array
    {
        return [
            'A' => 5         
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
            2    => ['font' => ['bold' => true]],
        ];
    }
}
