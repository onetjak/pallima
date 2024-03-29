@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PENGURUS</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Penambahan Data Pengurus</h2>
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="{{ route('pengurus.store') }}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="no_hp" required>
                                        <label class="form-label">Nomor Handphone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatan" maxlength="100" minlength="3" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                    <div class="help-info">Contoh: Rt01/Rw02 atau Rw</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <br>
                                        <select name="kategori" class="form-control show-tick">
                                            <option> -- Pilih Kategori --</option>
                                            <option value="rt"> RT </option>
                                            <option value="rw">RW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" maxlength="100" minlength="3" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="masa_bhakti" maxlength="100" minlength="3" required>
                                        <label class="form-label">Masa Bhakti</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mulai" maxlength="100" minlength="3" required>
                                        <label class="form-label">Mulai</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="berakhir" maxlength="100" minlength="3" required>
                                        <label class="form-label">Berakhir</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sk" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nomor SK</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggal" maxlength="100" minlength="3" required>
                                        <label class="form-label">Tanggal SK</label>
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
