<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
use Carbon\Carbon;
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['path'] = $request->file('path')->store(
            'renstra/user-'.$data['id_user'], 'public'
        );
        // $data['tanggal_upload'] = Carbon::now();
        $data['status'] = 1;

        Upload::create($data);
        return redirect()->back()->with('success', 'File berhasil dikirim!');
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
