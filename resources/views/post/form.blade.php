@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>POST</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            @if (isset($post))
                                <h2>Edit Data</h2>
                            @else
                                <h2>Penambahan Data</h2>
                            @endif
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="{{ isset($post)
                                                                            ? route('post.update',$post->id)
                                                                            : route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if (isset($post))
                                    @method('PATCH')
                                @endif
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" id="judul" value="{{ isset($post) ? $post->judul : old('judul') }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ isset($post) ? $post->deskripsi : old('deskripsi') }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Deskripsi</label>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="konten">Konten</label>
                                        <textarea id="editor"  name="konten" class="form-control konten">{{ isset($post) ? $post->konten : old('konten') }}</textarea>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="cover">Cover</label><br>
                                        {{-- <img src="{{ asset('storage/'.$post->cover) }}" width="200px"> --}}
                                        <input type="file" class="form-control" name="cover" id="cover" value="{{ old('cover') }}">
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="kategori_id">Kategori</label>
                                        <select name="kategori_id" id="kategori_id" class="form-control">
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{ $kategori->id }}"

                                                    @if (isset($post))
                                                        @if ($kategori->id==$post->kategori_id)
                                                            selected
                                                        @endif
                                                    @else
                                                        @if ($kategori->id==old('kategori_id'))
                                                            selected
                                                        @endif
                                                    @endif
                                                    >{{ $kategori->name }}</option>

                                            @endforeach
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-group">
                                        <label for="tgl_publis">Tanggal Publis</label>
                                        <input type="date" class="form-control" value="{{ isset($post) ? $post->tgl_publis->format('Y-m-d') : old('tgl_publis') }}" name="tgl_publis" id="tgl_publis" required>
                                    </div>
                                </div>
                                <input class="btn btn-primary waves-effect" value="{{ isset($post)? 'UBAH':'TAMBAH' }}" type="submit">
                                <button class="btn btn-danger waves-effect" type="reset">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
        </div>
</section>

@endsection

{{-- @section('script')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector : 'textarea.konten',height: 350,})</script>
@endsection --}}
