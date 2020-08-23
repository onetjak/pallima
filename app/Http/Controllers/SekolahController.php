<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class SekolahController extends Controller
{
    public function index()
    {
        $sekolah = Sekolah::where('kategori', '=', 'sd')->get();
        return view('admin.sekolah.sekolah', compact('sekolah'));
    }

    public function store(Request $request)
    {
        $simpan = Sekolah::create($request->all());
        if ($simpan == true) {
            return redirect()->route('sekolah.index');
        }
    }

    public function edit($id)
    {
        $sekolah = Sekolah::find($id);
        return view('admin.sekolah.edit_sekolah', compact('sekolah'));
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        $ubah = Sekolah::find($id)->update($request->all());
        if ($ubah == true) {
            return redirect()->route('sekolah.index');
        }
    }

    public function hapus($id)
    {
        Sekolah::destroy($id);
        return redirect()->back();
    }

    public function ApiSekolah()
    {
        $sekolah = Sekolah::orderBy('id', 'desc')->get();
        return $sekolah;
    }
}
