<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $items = Kecamatan::with('desa')->get()->sortDesc();

        return view('pages.kecamatan', [
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
        Kecamatan::create($data);

        return redirect()->back()->with('success', 'Kecamatan Berhasil Ditambahkan!');
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
        $item = Kecamatan::find($id);
        $item->update($data);

        return redirect()->back()->with('toast_success', 'Kecamatan Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = Kecamatan::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Kecamatan dihapus!');
    }
}
