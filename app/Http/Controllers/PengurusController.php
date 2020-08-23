<?php

namespace App\Http\Controllers;

use Excel;
use App\Imports\PengurusImport;
use Illuminate\Http\Request;
use App\Pengurus;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::where('kategori', '=', 'rt')->get();
        return view('admin.pengurus.pengurus', compact('pengurus'));
    }

    public function store(Request $request)
    {
        $simpan = Pengurus::create($request->all());
        if ($simpan == true) {
            return redirect()->route('pengurus.index');
        }
    }

    public function import()
    {
        // dd(request()->file('file_import'));
        $import = Excel::import(new PengurusImport, request()->file('file_import'));
        return redirect('/pengurus');
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

    public function ApiPengurus()
    {
        $pengurus = Pengurus::orderBy('id', 'desc')->get();
        return $pengurus;
    }

    //public function delete($id)
    //{
    //	$hapus = Bantuan::find($id)->delete();
    //	if ($hapus == true) {
    //		return redirect()->route('bantuan.index');
    //	}
    //}
}
