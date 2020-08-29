@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BANTUAN</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Jenis Bantuan</h2>
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="{{ route('bantuan.update', $bantuan->id) }}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="{{ $bantuan->nama }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="nik" value="{{ $bantuan->jumlah }}" required>
                                        <label class="form-label">NIK</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
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
