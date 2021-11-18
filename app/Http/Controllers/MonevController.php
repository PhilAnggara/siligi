<?php

namespace App\Http\Controllers;

use App\Http\Requests\MonevRequest;
use App\Models\Monev;
use App\Models\MonevFile;
use App\Models\Upload;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MonevController extends Controller
{
    public function index()
    {
        $items1 = Monev::with('files','tr1','tr2','tr3','tr4','latestUpload')->where('id_dinas', 1)->get();
        $items2 = Monev::with('files','tr1','tr2','tr3','tr4','latestUpload')->where('id_dinas', 2)->get();
        $items3 = Monev::with('files','tr1','tr2','tr3','tr4','latestUpload')->where('id_dinas', 3)->get();
        $items4 = Monev::with('files','tr1','tr2','tr3','tr4','latestUpload')->where('id_dinas', 4)->get();
        $items5 = Monev::with('files','tr1','tr2','tr3','tr4','latestUpload')->where('id_dinas', 5)->get();
        $files = MonevFile::all();

        return view('pages.monev', [
            'items1' => $items1,
            'items2' => $items2,
            'items3' => $items3,
            'items4' => $items4,
            'items5' => $items5,
            'files' => $files
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(MonevRequest $request)
    {
        $data = $request->all();
        $nama_file = $request->file('path')->getClientOriginalName();
        $data['path'] = $request->file('path')->storeAs(
            'monev/triwulan-'.$data['triwulan'], $nama_file, 'public'
        );

        MonevFile::create($data);
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
        $item = MonevFile::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'File berhasil dihapus!');
    }
}
