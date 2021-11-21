<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Dinas;
use App\Models\PaguDpa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaguDpaController extends Controller
{
    public function index()
    {
        $items = PaguDpa::with('dinas')->get()->sortDesc();
        $dinas = Dinas::all();

        // $test = Carbon::now()->isoFormat('D-MMM-YYYY|H:m:s');
        // dd($test);

        return view('pages.pagu-dpa', [
            'items' => $items,
            'dinas' => $dinas
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
        $tanggal = Carbon::now()->isoFormat('D-MMM-YYYY');
        $jam = Carbon::now()->isoFormat('H-m-s');
        $data['path'] = $request->file('path')->storeAs(
            'pagu-anggaran/dpa/'.$tanggal.'/'.$jam, $nama_file, 'public'
        );

        PaguDpa::create($data);
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
        $item = PaguDpa::find($id);
        $item->delete();

        return redirect()->back()->with('toast_success', 'Data berhasil dihapus!');
    }
}
