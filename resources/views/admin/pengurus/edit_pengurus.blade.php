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
                            <form id="form_advanced_validation" action="{{ route('pengurus.update', $pengurus->id) }}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_hp" value="{{ $pengurus->no_hp }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">N0. Hp</label>
                                    </div>
                                    <div class="help-info">Sesuai Akta dan KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="{{ $pengurus->nama }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Sesuai Akta dan KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatan" value="{{ $pengurus->jabatan }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                    <div class="help-info">Sesuai Akta dan KK</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <br>
                                        <select name="kategori" class="form-control show-tick">
                                            <option> -- Pilih Kategori --</option>
                                            <option value="rt"> RT </option>
                                            <option value="rw">RW</option>
                                        </select>
                                        <label class="form-label">Kategori </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" value="{{ $pengurus->alamat }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="masa_bhakti" value="{{ $pengurus->masa_bhakti }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Masa Bhakti</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mulai" value="{{ $pengurus->mulai }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Mulai</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="berakhir" value="{{ $pengurus->berakhir }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Berakhir</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sk" value="{{ $pengurus->sk }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">SK</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggal" value="{{ $pengurus->tanggal }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Tanggal</label>
                                    </div>
                                    <div class="help-info">Sesuai KTP</div>
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
