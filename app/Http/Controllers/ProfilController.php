<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfilUpdateRequest;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil.index')->withProfil(Profil::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.form')->withProfil(Profil::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('struktur')) {
            $struktur = $request->file('struktur');
            $ext = $struktur->getClientOriginalExtension();
            $namafile = Str::slug('struktur' . '-' . time() . '-') . '.' . $ext;
            $struktur->move(public_path('upload/foto'), $namafile);
            // Storage::putFileAs('public/foto', $foto, $request->foto);
        }
        $simpan = Profil::create([
            'profil' => $request->profil,
            'struktur' => $namafile
        ]);
        if ($simpan == true) {
            return redirect()->route('profil.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Profil $profil)
    {
        return view('profil.form')
            ->withProfil($profil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfilUpdateRequest $request, Profil $profil)
    {
        // return dd($request);
        if ($request->hasFile('struktur')) {
            $struktur = $request->file('struktur');
            $ext = $struktur->getClientOriginalExtension();
            $namafile = Str::slug('struktur' . '-' . time() . '-') . '.' . $ext;
            // $cover = $request->cover->store('upload/foto');
            $profil->hapusCover();
            $struktur->move(public_path('upload/foto'), $namafile);
        }
        $data = [
            'struktur' => $namafile,
            'profil' => $request->profil

        ];

        $profil->update($data);
        session()->flash('sukses', 'Post Berhasil diubah');
        return redirect(route('profil.index'));
    }

    public function ApiProfil()
    {
        $profil = Profil::orderBy('id', 'desc')->get();
        return $profil;
    }
}
