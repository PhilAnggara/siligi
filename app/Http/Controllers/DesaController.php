<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {
        $items = Desa::with('kecamatan')->get()->sortDesc();
        $kecamatan = Kecamatan::all();

        return view('pages.desa', [
            'items' => $items,
            'kecamatan' => $kecamatan
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        Desa::create($data);

        return redirect()->back()->with('success', 'Desa Berhasil Ditambahkan!');
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
        $item = Desa::find($id);
        $item->update($data);

        return redirect()->back()->with('toast_success', 'Desa Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = Desa::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Desa dihapus!');
    }
}
