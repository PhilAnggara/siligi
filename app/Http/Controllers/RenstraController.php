<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RenstraController extends Controller
{
    public function index()
    {
        $items = User::with('uploads','latestUpload')->get();

        return view('pages.renstra', [
            'items' => $items
        ]);
    }
}
