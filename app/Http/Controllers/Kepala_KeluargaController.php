<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepala_Keluarga;

class Kepala_KeluargaController extends Controller
{
    public function index()
    {
    	$kepala_keluarga = Kepala_Keluarga::all();
    	return view('admin.kepala_keluarga.kepala_keluarga' , compact('kepala_keluarga'));
    }

    public function store(Request $request)
    {
    	$simpan = Kepala_Keluarga::create($request->all());
    	if($simpan == true) {
    	 return redirect()->route('kepala_keluarga.index');
    	}
    }

    public function edit($id)
    {
    	$kepala_keluarga = Kepala_Keluarga::find($id);
    	return view('admin.kepala_keluarga.edit_keluarga' , compact('kepala_keluarga'));
    }

    public function update(Request $request , $id)
    {
    	// return $request->all();
    	$ubah = Kepala_Keluarga::find($id)->update($request->all());
    	if($ubah == true) {
    	 return redirect()->route('kepala_keluarga.index');
        }
    }

    public function hapus($id){
        Kepala_Keluarga::destroy($id);
        return redirect()->back();
    }

    //public function delete($id)
    //{
    //	$hapus = Kepala_Keluarga::find($id)->delete();
    //	if ($hapus == true) {
    //		return redirect()->route('kepala_keluarga.index');
    //	}
    //}
}
