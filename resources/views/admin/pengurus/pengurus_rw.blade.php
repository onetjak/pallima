@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PENGURUS</h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Pengurus Rw
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                 <a class="btn btn-success" href="{{url('/form_pengurus')}}" style="margin-bottom: 10px">+ Data Pengurus</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NO. HP</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Kategori</th>
                                            <th>Alamat</th>
                                            <th>Masa Bakti</th>
                                            <th>Mulai</th>
                                            <th>Berakhir</th>
                                            <th>SK</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($pengurus_rw as $b)
                                    <tbody>
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $b->no_hp }}</th>
                                            <th>{{ $b->nama }}</th>
                                            <th>{{ $b->jabatan }}</th>
                                            <th>{{ $b->kategori }}</th>
                                            <th>{{ $b->alamat}}</th>
                                            <th>{{ $b->masa_bhakti }}</th>
                                            <th>{{ $b->mulai }}</th>
                                            <th>{{ $b->berakhir }}</th>
                                            <th>{{ $b->sk }}</th>
                                            <th>{{ $b->tanggal }}</th>
                                            <th>
                                                <div class="btn-group">

                                                 <a class="btn btn-primary waves-effect" href="{{ route('pengurus.edit_pengurus' , $b->id)}}"><i class="material-icons">border_color</i> </a>

                                                 <a class="btn btn-danger waves-effect" data-toggle="modal" href='#modal-delete{{$b->id}}'><i class="material-icons">delete_sweep</i></a>

                                                 <div class="modal fade" id="modal-delete{{$b->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Hapus Data Pengurus</h4>
                                                            </div>
                                                                                                                        <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus data Pengurus bernama {{$b->no_hp}} ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                <a href="{{ url('/pengurus/hapus' , $b->id) }}"class="btn btn-danger">Hapus</a>
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
