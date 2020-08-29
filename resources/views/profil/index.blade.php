@extends('layouts.pal5')

@section('konten')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PROFIL</h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Pengaturan Profil
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                 {{-- <a class="btn btn-success" href="{{ route('profil.create')}}" style="margin-bottom: 10px">+ Artikel</a> --}}
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Struktur</th>
                                            <th>Profil</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- <img src="{{ asset('storage/img'.$post->cover) }}" width="200px"> --}}
                                     @forelse ($profil as $b)
                                        <tr>
                                            {{-- <th>{{ $index + 1 }}</th> --}}
                                            <th> <img src="{{ asset('upload/foto/'.$b->struktur)}}" alt="" width="100px"> </th>
                                            <th>{{ $b->profil }}</th>
                                            <th>
                                                <div class="btn-group">

                                                 <a class="btn btn-primary waves-effect" href="{{ route('profil.edit' , $b->id) }}"><i class="material-icons">border_color</i> </a>


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
