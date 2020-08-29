@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>POSTINGAN</h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Artikel
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                 <a class="btn btn-success" href="{{ route('post.create')}}" style="margin-bottom: 10px">+ Artikel</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Cover</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Publis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- <img src="{{ asset('storage/img'.$post->cover) }}" width="200px"> --}}
                                     @forelse ($posts as $index=>$post)
                                        <tr>
                                            <th>{{ $index + 1 }}</th>
                                            <th> <img src="{{ asset('upload/foto/'.$post->cover)}}" alt="" width="100px"> </th>
                                            <th>{{ $post->judul }}</th>
                                            <th>{{ $post->kategori->name }}</th>
                                            <th>{{ $post->tgl_publis->format('d M Y') }}</th>
                                            <th>
                                                <div class="btn-group">

                                                 <a class="btn btn-primary waves-effect" href="{{ route('post.edit' , $post->id) }}"><i class="material-icons">border_color</i> </a>
                                                 <a class="btn btn-danger waves-effect" data-toggle="modal" href='#modal-delete{{$post->id}}'><i class="material-icons">delete_sweep</i></a>

                                                 <div class="modal fade" id="modal-delete{{$post->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Hapus Artike</h4>
                                                            </div>
                                                                                                                        <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus artikel dengan judul {{$post->judul}} ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                <a href="{{ url('/post/hapus' , $post->id) }}"class="btn btn-danger">Hapus</a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                 </div>
                                                </div>

                                            </th>
                                     @empty
                                        <tr>
                                            <td colspan="6" >Data Kosong </td>
                                        </tr>

                                     @endforelse

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
