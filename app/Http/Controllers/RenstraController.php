<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Upload;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RenstraController extends Controller
{
    public function index()
    {
        $items = User::with('uploads','latestUpload')->get();
        $items1 = User::with('uploads','latestUpload')->where('id_dinas', 1)->get();
        $items2 = User::with('uploads','latestUpload')->where('id_dinas', 2)->get();
        $items3 = User::with('uploads','latestUpload')->where('id_dinas', 3)->get();
        $items4 = User::with('uploads','latestUpload')->where('id_dinas', 4)->get();
        $items5 = User::with('uploads','latestUpload')->where('id_dinas', 5)->get();

        return view('pages.renstra', [
            'items' => $items,
            'items1' => $items1,
            'items2' => $items2,
            'items3' => $items3,
            'items4' => $items4,
            'items5' => $items5
        ]);
    }

    public function create()
    {
        //
    }

    public function store(UploadRequest $request)
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
