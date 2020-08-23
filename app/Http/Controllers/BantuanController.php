<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bantuan;

class BantuanController extends Controller
{
    public function index()
    {
    	$bantuan = Bantuan::all();
    	return view('admin.bantuan.bantuan' , compact('bantuan'));
    }

    public function store(Request $request)
    {
    	$simpan = Bantuan::create($request->all());
    	if($simpan == true) {
    	 return redirect()->route('bantuan.index');
    	}
    }

    public function edit($id)
    {
    	$bantuan = Bantuan::find($id);
    	return view('admin.bantuan.edit' , compact('bantuan'));
    }

    public function update(Request $request , $id)
    {
    	// return $request->all();
    	$ubah = Bantuan::find($id)->update($request->all());
    	if($ubah == true) {
    	 return redirect()->route('bantuan.index');
    	}

    }

    public function hapus($id){
        Bantuan::destroy($id);
        return redirect()->back();
    }

    //public function delete($id)
    //{
    //	$hapus = Bantuan::find($id)->delete();
    //	if ($hapus == true) {
    //		return redirect()->route('bantuan.index');
    //	}
    //}

    public function ApiBantuan()
    {
        $bantuan = Bantuan::orderBy('id', 'desc')->get();
        return $bantuan;
    }

}
