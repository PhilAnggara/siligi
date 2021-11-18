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

    public function kirim_json()
    {
        $location = Kecamatan::all();
        return json_encode($location);
    }
}
