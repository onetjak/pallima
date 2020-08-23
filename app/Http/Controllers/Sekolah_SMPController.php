<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class Sekolah_SMPController extends Controller
{
    public function index()
    {
        $sekolah_smp = Sekolah::where('kategori', '=', 'smp')->get();
        return view('admin.sekolah.sekolah_smp', compact('sekolah_smp'));
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

    //public function delete($id)
    //{
    //	$hapus = Bantuan::find($id)->delete();
    //	if ($hapus == true) {
    //		return redirect()->route('bantuan.index');
    //	}
    //}

}
