@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PROFIL</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            @if (isset($post))
                                <h2>Edit Profil</h2>
                            @else
                                <h2>Edit Profil</h2>
                            @endif
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="{{ isset($profil)
                                                                            ? route('profil.update',$profil->id)
                                                                            : route('profil.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if (isset($profil))
                                    @method('PATCH')
                                @endif
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="profil">Profil</label>
                                        <textarea id="editor"  name="profil" class="form-control">{{ isset($profil) ? $profil->profil : old('profil') }}</textarea>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="cover">Struktur</label><br>
                                        <input type="file" class="form-control" name="struktur" id="struktur" value="{{ old('struktur') }}">
                                  </div>
                                </div>

                                <input class="btn btn-primary waves-effect" value="{{ isset($profil)? 'UBAH':'TAMBAH' }}" type="submit">
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

