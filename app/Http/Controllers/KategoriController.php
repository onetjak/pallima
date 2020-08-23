<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        $simpan = Kategori::create($request->all());
        if ($simpan == true) {
            return redirect()->route('kategori.index');
        }
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('katgeori'));
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        $ubah = Kategori::find($id)->update($request->all());
        if ($ubah == true) {
            return redirect()->route('kategori.index');
        }
    }

    public function hapus($id)
    {
        Kategori::destroy($id);
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
