@extends('layouts.pal5')

@section('konten')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BERANDA</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">content_paste</i>
                        </div>
                        <div class="content">
                            <div class="text">Artikel</div>
                            <div class="number">{{ $data['jmlh_post'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">headset_mic</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Pelayanan</div>
                            <div class="number">{{ $data['jmlh_pelayanan'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">person_pin</i>
                        </div>
                        <div class="content">
                            <div class="text">Pengguna</div>
                            <div class="number">{{ $data['jmlh_pengguna'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-indigo hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">accessibility</i>
                        </div>
                        <div class="content">
                            <div class="text">Jenis Bantuan</div>
                            <div class="number">{{ $data['jmlh_bantuan'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-purple hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assignment_ind</i>
                        </div>
                        <div class="content">
                            <div class="text">Pengurus Rt dan Rw</div>
                            <div class="number">{{ $data['jmlh_pengurus'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-lime hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <div class="content">
                            <div class="text">Tempat Ibadah</div>
                            <div class="number">{{ $data['jmlh_ibadah'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-deep-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">child_care</i>
                        </div>
                        <div class="content">
                            <div class="text">Posyandu</div>
                            <div class="number">{{ $data['jmlh_posyandu'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-brown hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">school</i>
                        </div>
                        <div class="content">
                            <div class="text">Sekolah</div>
                            <div class="number">{{ $data['jmlh_sekolah'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="{{asset('javascript:void(0);')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{asset('javascript:void(0);')}}">Action</a></li>
                                        <li><a href="{{asset('javascript:void(0);')}}">Another action</a></li>
                                        <li><a href="{{asset('javascript:void(0);')}}">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            </div>
        </div>
    </section>

@endsection
