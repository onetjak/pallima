@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KEPALA KELUARGA</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Data</h2>
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="{{ route('kepala_keluarga.update', $kepala_keluarga->id) }}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="{{ $kepala_keluarga->nama }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Sesuai Akta dan KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="nik" value="{{ $kepala_keluarga->nik }}" required>
                                        <label class="form-label">Nomor KK.</label>
                                    </div>
                                    <div class="help-info">Sesuai KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jumlah" value="{{ $kepala_keluarga->jumlah }}" required>
                                        <label class="form-label">Jumlah Keluarga</label>
                                    </div>
                                    <div class="help-info">Sesuai KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="anggota" value="{{ $kepala_keluarga->anggota }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Anggota Keluarga</label>
                                    </div>
                                    <div class="help-info">Sesuai KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" value="{{ $kepala_keluarga->alamat }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="rt" value="{{ $kepala_keluarga->rt }}" required>
                                        <label class="form-label">Rt</label>
                                    </div>
                                    <div class="help-info">Sesuai KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="rw" value="{{ $kepala_keluarga->rw }}" required>
                                        <label class="form-label">Rw</label>
                                    </div>
                                    <div class="help-info">Sesuai KK</div>
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
