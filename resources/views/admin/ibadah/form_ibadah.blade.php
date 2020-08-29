@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TEMPAT IBADAH</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Penambahan Lokasi</h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('ibadah.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ketua" maxlength="100" minlength="3" required>
                                        <label class="form-label">Ketua</label>
                                    </div>
                                    <div class="help-info">Pengurus Tempat Ibadah</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" maxlength="100" minlength="3" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="file" class="form-control" name="foto" required>
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
