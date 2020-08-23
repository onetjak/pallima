<?php

namespace App\Http\Controllers;

use App\Posyandu;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PosyanduController extends Controller
{
    public function index()
    {
    	$posyandu = Posyandu::all();
    	return view('admin.posyandu.posyandu' , compact('posyandu'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $namafile = Str::slug('foto'.'-'.time().'-').'.'.$ext;
            $foto->move(public_path('upload/foto'), $namafile);
            // Storage::putFileAs('public/foto', $foto, $request->foto);
        }
        $simpan = Posyandu::create([
            'nama'=>$request->nama,
            'ketua'=>$request->ketua,
            'alamat'=>$request->alamat,
            'foto'=>$namafile
        ]);
    	if($simpan == true) {
    	 return redirect()->route('posyandu.index');
    	}
    }

    public function hapus($id){
        $ft = Posyandu::where('id',$id)->first();
        $foto = public_path('upload/foto/'.$ft->foto);
        File::delete($foto);
        Posyandu::destroy($id);
        return redirect()->back();
    }

    public function ApiPosyandu()
    {
        $posyandu = Posyandu::orderBy('id', 'desc')->get();
        return $posyandu;
    }
}
