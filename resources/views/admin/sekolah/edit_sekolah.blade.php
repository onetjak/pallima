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
                            <form id="form_advanced_validation" action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="{{ $sekolah->nama }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Sesuai Akta dan KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ketua" value="{{ $sekolah->ketua }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Sesuai Akta dan KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" value="{{ $sekolah->alamat }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <br>
                                        <select name="kategori" class="form-control show-tick">
                                            <option> -- Pilih Kategori --</option>
                                            <option value="sd"> SD </option>
                                            <option value="smp">SMP</option>
                                            <option value="sma">SMA</option>
                                        </select>
                                        <label class="form-label">Kategori </label>
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
