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
        $items = DataPeta::with('desa')->get();
        $kecamatan = Kecamatan::with('desa')->get();
        $desa = Desa::with('kecamatan')->get();

        return view('pages.peta', [
            'items' => $items,
            'kecamatan' => $kecamatan,
            'desa' => $desa
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
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
