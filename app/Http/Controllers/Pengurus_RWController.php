<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurus;

class Pengurus_RWController extends Controller
{
    public function index()
    {
        $pengurus_rw = Pengurus::where('kategori', '=', 'rw')->get();
        return view('admin.pengurus.pengurus_rw', compact('pengurus_rw'));
    }

    public function store(Request $request)
    {
        $simpan = Pengurus::create($request->all());
        if ($simpan == true) {
            return redirect()->route('pengurus.index');
        }
    }

    public function edit($id)
    {
        $pengurus = Pengurus::find($id);
        return view('admin.pengurus.edit_pengurus', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        $ubah = Pengurus::find($id)->update($request->all());
        if ($ubah == true) {
            return redirect()->route('pengurus.index');
        }
    }

    public function hapus($id)
    {
        Pengurus::destroy($id);
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
