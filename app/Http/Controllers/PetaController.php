<?php

namespace App\Http\Controllers;

use App\Models\DataPeta;
use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $items = DataPeta::with('desa')->get()->sortDesc();

        return view('pages.peta', [
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
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
