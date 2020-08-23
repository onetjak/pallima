<?php

namespace App\Http\Controllers;

use App\Ibadah;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class IbadahController extends Controller
{
    public function index()
    {
        $ibadah = Ibadah::all();
        return view('admin.ibadah.ibadah', compact('ibadah'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $namafile = Str::slug('foto' . '-' . time() . '-') . '.' . $ext;
            $foto->move(public_path('upload/foto'), $namafile);
            // Storage::putFileAs('public/foto', $foto, $request->foto);
        }
        $simpan = Ibadah::create([
            'ketua' => $request->ketua,
            'alamat' => $request->alamat,
            'foto' => $namafile
        ]);
        if ($simpan == true) {
            return redirect()->route('ibadah.index');
        }
    }

    public function hapus($id)
    {
        $ft = Ibadah::where('id', $id)->first();
        $foto = public_path('upload/foto/' . $ft->foto);
        File::delete($foto);
        Ibadah::destroy($id);
        return redirect()->back();
    }

    public function ApiIbadah()
    {
        $ibadah = Ibadah::orderBy('id', 'desc')->get();
        return $ibadah;
    }
}
