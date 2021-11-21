<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Kecamatan;
use App\Models\Musrembang;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MusrembangController extends Controller
{
    public function index()
    {
        $items = Musrembang::with('kecamatan')->get()->sortDesc();
        $kecamatan = Kecamatan::all();

        return view('pages.musrembang', [
            'items' => $items,
            'kecamatan' => $kecamatan
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(UploadRequest $request)
    {
        $data = $request->all();

        $nama_file = $request->file('path')->getClientOriginalName();
        $kec = Kecamatan::find($data['id_kecamatan'])->nama_kecamatan;
        $tanggal = Carbon::now()->isoFormat('D-MMM-YYYY');
        $jam = Carbon::now()->isoFormat('H-m-s');

        $data['path'] = $request->file('path')->storeAs(
            'musrembang/'.$kec.'/'.$tanggal.'/'.$jam, $nama_file, 'public'
        );

        Musrembang::create($data);
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
        $item = Musrembang::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data berhasil dihapus!');
    }
}
