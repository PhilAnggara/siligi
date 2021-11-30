<?php

namespace App\Http\Controllers;

use App\Exports\RekapKegiatanExport;
use App\Models\Dinas;
use App\Models\RekapKegiatan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekapKegiatanController extends Controller
{
    public function index()
    {
        $dinas = Dinas::with('rekap')->get();
        $items = RekapKegiatan::with('dinas')->get();
        
        return view('pages.rekap-kegiatan', [
            'dinas' => $dinas,
            'items' => $items
        ]);
    }

    public function export() 
    {
        return Excel::download(new RekapKegiatanExport, 'rekap-kegiatan.xlsx');
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        RekapKegiatan::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = RekapKegiatan::find($id);
        $item->update($data);

        return redirect()->back()->with('toast_success', 'Rekap Kegiatan Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = RekapKegiatan::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data dihapus!');
    }
}
