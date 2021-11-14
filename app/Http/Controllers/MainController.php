<?php

namespace App\Http\Controllers;

use App\Models\Desa;
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

        return view('pages.peta', [
            'items' => $items
        ]);
    }
}
