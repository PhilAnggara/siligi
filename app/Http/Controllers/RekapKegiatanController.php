<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\RekapKegiatan;
use Illuminate\Http\Request;

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
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
