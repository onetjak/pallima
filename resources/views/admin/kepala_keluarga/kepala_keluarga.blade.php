@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KEPALA KELUARGA</h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kepala Keluarga
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                 <a class="btn btn-success" href="{{url('/form_keluarga')}}" style="margin-bottom: 10px">+ Data</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>No. KK</th>
                                            <th>Jumlah</th>
                                            <th>Anggota</th>
                                            <th>Alamat</th>
                                            <th>Rt</th>
                                            <th>Rw</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($kepala_keluarga as $b)
                                    <tbody>
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $b->nama }}</th>
                                            <th>{{ $b->nik }}</th>
                                            <th>{{ $b->jumlah }}</th>
                                            <th>{{ $b->anggota }}</th>
                                            <th>{{ $b->alamat}}</th>
                                            <th>{{ $b->rt}}</th>
                                            <th>{{ $b->rw }}</th>
                                            <th>
                                                <div class="btn-group">

                                                 <a class="btn btn-primary waves-effect" href="{{ route('kepala_keluarga.edit_keluarga' , $b->id)}}"><i class="material-icons">border_color</i> </a>

                                                 <a class="btn btn-danger waves-effect" data-toggle="modal" href='#modal-delete{{$b->nik}}'><i class="material-icons">delete_sweep</i></a>

                                                 <div class="modal fade" id="modal-delete{{$b->nik}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Hapus Data Kepala Keluara</h4>
                                                            </div>
                                                                                                                        <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus data NIK {{$b->nik}} ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                <a href="{{ url('/kepala_keluarga/hapus' , $b->id) }}"class="btn btn-danger">Hapus</a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                 </div>

                                                </div>
                                            </th>
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
</section>

@endsection
