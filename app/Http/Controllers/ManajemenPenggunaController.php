<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class ManajemenPenggunaController extends Controller
{
    public function index()
    {
        $manajemen_pengguna = User::all();
        return view('manajemen_pengguna.index', compact('manajemen_pengguna'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => Hash::make($request->password),
        ]);
        return redirect('manajemen_pengguna');
    }

    public function edit($id)
    {
        $manajemen_pengguna = User::find($id);
        return view('manajemen_pengguna.edit', compact('manajemen_pengguna'));
    }

    public function update(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->level = $request->level;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect('manajemen_pengguna');
    }

    public function hapus($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    //public function delete($id)
    //{
    //	$hapus = Bantuan::find($id)->delete();
    //	if ($hapus == true) {
    //		return redirect()->route('bantuan.index');
    //	}
    //}


}
