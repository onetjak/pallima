<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Kategori;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index')->withPosts(Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.form')->withKategoris(Kategori::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $ext = $cover->getClientOriginalExtension();
            $namafile = Str::slug('cover' . '-' . time() . '-') . '.' . $ext;
            $cover->move(public_path('upload/foto'), $namafile);
            // Storage::putFileAs('public/foto', $foto, $request->foto);
        }
        $simpan = Post::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'kategori_id' => $request->kategori_id,
            'tgl_publis' => $request->tgl_publis,
            'cover' => $namafile
        ]);
        if ($simpan == true) {
            return redirect()->route('post.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.form')
            ->withKategoris(Kategori::all())
            ->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        // return dd($request);
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $ext = $cover->getClientOriginalExtension();
            $namafile = Str::slug('cover' . '-' . time() . '-') . '.' . $ext;
            // $cover = $request->cover->store('upload/foto');
            $post->hapusCover();
            $cover->move(public_path('upload/foto'), $namafile);
        }
        $data = [
            'cover' => $namafile,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'kategori_id' => $request->kategori_id
        ];

        $post->update($data);
        session()->flash('sukses', 'Post Berhasil diubah');
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ApiBerita()
    {
        $post = Post::orderBy('id', 'desc')->get();
        return $post;
    }
}
