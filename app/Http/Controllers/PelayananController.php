<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelayanan;

class PelayananController extends Controller
{
    public function index()
    {
    	$pelayanan = Pelayanan::all();
    	return view('admin.pelayanan.pelayanan' , compact('pelayanan'));
    }

    public function store(Request $request)
    {
    	$simpan = Pelayanan::create($request->all());
    	if($simpan == true) {
    	 return redirect()->route('pelayanan.index');
    	}
    }

    public function edit($id)
    {
    	$pelayanan = Pelayanan::find($id);
    	return view('admin.pelayanan.edit' , compact('pelayanan'));
    }

    public function update(Request $request , $id)
    {
    	// return $request->all();
    	$ubah = Pelayanan::find($id)->update($request->all());
    	if($ubah == true) {
    	 return redirect()->route('pelayanan.index');
    	}

    }

    public function hapus($id){
        Pelayanan::destroy($id);
        return redirect()->back();
    }

    public function ApiPelayanan()
    {
        $pelayanan = Pelayanan::orderBy('id', 'desc')->get();
        return $pelayanan;
    }

}
