<?php

namespace App\Http\Controllers;

use App\Exports\PetaExport;
use App\Models\DataPeta;
use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PetaController extends Controller
{
    public function index()
    {
        $items = DataPeta::with('desa')->get()->sortDesc();

        return view('pages.peta', [
            'items' => $items
        ]);
    }

    public function export() 
    {
        return Excel::download(new PetaExport, 'data-peta.xlsx');
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        DataPeta::create($data);

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
        $item = DataPeta::find($id);
        $item->update($data);

        return redirect()->back()->with('toast_success', 'Data Berhasil Diubah!');
    }
    
    public function destroy($id)
    {
        $item = DataPeta::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data dihapus!');
    }
}
