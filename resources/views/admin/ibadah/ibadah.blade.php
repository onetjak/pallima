@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TEMPAT IBADAH</h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Tempat Ibadah
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                 <a class="btn btn-success" href="{{url('/form_ibadah')}}" style="margin-bottom: 10px">+ Lokasi</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Ketua</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($ibadah as $b)
                                    <tbody>
                                         <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $b->nama }}</th>
                                            <th>{{ $b->ketua }}</th>
                                            <th>{{ $b->alamat }}</th>
                                            <th><img src="{{ asset('upload/foto/'.$b->foto)}}" alt="" width="100px"></th>
                                            <th>
                                                <div class="btn-group">
                                                 <a class="btn btn-danger waves-effect" data-toggle="modal" href='#modal-delete{{$b->id}}'><i class="material-icons">delete_sweep</i></a>

                                                 <div class="modal fade" id="modal-delete{{$b->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Hapus Lokasi</h4>
                                                            </div>
                                                                                                                        <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus {{$b->nama}} ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                <a href="{{ url('/ibadah/hapus' , $b->id) }}"class="btn btn-danger">Hapus</a>
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
