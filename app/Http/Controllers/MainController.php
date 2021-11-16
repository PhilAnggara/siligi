<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
    
    public function peta()
    {
        $items = Desa::with('kecamatan')->get();
        $kecamatan = Kecamatan::with('desa')->get();

        return view('pages.peta', [
            'items' => $items,
            'kecamatan' => $kecamatan
        ]);
    }

    public function kirim_json()
    {
        $location = Kecamatan::all();
        return json_encode($location);
    }
}
