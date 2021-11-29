<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Dinas;
use App\Models\Kecamatan;
use App\Models\User;
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

    public function profile()
    {
        $dinas = Dinas::all();
        return view('pages.profile', [
            'dinas' => $dinas
        ]);
    }
    
    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'username' => ['required', 'string', 'alpha_dash', 'min:3', 'max:255', 'unique:users,username,' . auth()->user()->id],
            'email' => ['required', 'string', 'email', 'min:4', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'id_dinas' => ['required'],
            'jabatan' => ['required', 'string', 'max:255'],
        ]);

        $item = User::find(auth()->user()->id);
        $item->update($data);

        return redirect()->back()->with('toast_success', 'Profil Berhasil Diupdate!');
    }
    
    public function uploadProfile(Request $request)
    {
        $data = $request->all();

        $data['profile_pic'] = $request->file('profile_pic')->store(
            'profile-pic/'.auth()->user()->username, 'public'
        );

        $item = User::find(auth()->user()->id);
        $item->profile_pic = $data['profile_pic'];
        $item->save();

        return redirect()->back()->with('toast_success', 'Foto Profil Berhasil Diupdate!');
    }

    public function hapusProfile(Request $request)
    {
        $data = $request->all();

        $item = User::find(auth()->user()->id);
        $item->profile_pic = "";
        $item->save();

        return redirect()->back()->with('toast_success', 'Foto Profil Berhasil Dihapus!');
    }
}
