@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PENGGUNA</h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Pengguna</h2>
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="{{ route('manajemen_pengguna.update', $manajemen_pengguna->id) }}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" value="{{ $manajemen_pengguna->name }}" maxlength="100" minlength="3" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" value="{{ $manajemen_pengguna->email }}" required>
                                        <label class="form-label">NIK</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <br>
                                        <select name="level" value="{{ $manajemen_pengguna->level }}" class="form-control show-tick">
                                            <option > -- Pilih Kategori --</option>
                                            @if ($manajemen_pengguna->level == 'admin')
                                            <option selected value="admin"> Admin </option>
                                            <option value="operator">Operator</option>
                                            @else
                                            <option value="admin"> Admin </option>
                                            <option selected value="operator">Operator</option>

                                            @endif
                                        </select>
                                        <label class="form-label">Level </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                    <div class="help-info">Pastikan Password Mudah Di ingat</div>
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
