<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kelurahan Pallima</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('images/Logo Pontianak.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


    <link href="{{ url('plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">

    <link href="{{ url('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />


    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="{{asset('plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
</head>

<body class="theme-deep-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon Bersabar Ya</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay" style="block"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">Kelurahan Pallima</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('images/user.png')}}" width="40" height="40" alt="User" />
                </div>
                <div class="info-container">
                    <div class="email">pal5@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url()->route('logout')}}"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU PENGOLAHAN DATA</li>
                    <li class="{{set_active('/index') }}">
                        <a href="{{url('/dashboard')}}"><i class="material-icons">home</i><span>Beranda</span></a>
                    </li>
                    <li>
                        <a class="menu-toggle"><i class="material-icons">content_paste</i><span>Artikel</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('post.index')}}">Post</a>
                            </li>
                            <li>
                                <a href="{{url('/kategori')}}">Kategori</a>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->level == "admin")
                    <li>
                        <a href="{{url('/profil')}}"><i class="material-icons">person</i><span>Profil</span></a>
                    </li>
                    <li>
                        <a href="{{url('/pelayanan')}}"><i class="material-icons">headset_mic</i><span>Pelayanan</span></a>
                    </li>
                    <li>
                        <a href="{{url('/manajemen_pengguna')}}"><i class="material-icons">person_pin</i><span>Manajemen Pengguna</span></a>
                    </li>
                    <li class="{{set_active('/bantuan') }}">
                        <a href="{{url('/bantuan')}}"><i class="material-icons">accessibility</i><span>Data Bantuan</span></a>
                    </li>
                    <li>
                        <a class="menu-toggle"><i class="material-icons">assignment_ind</i><span> Data Pengurus</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/pengurus')}}">RT</a>
                            </li>
                            <li>
                                <a href="{{url('/pengurus_rw')}}">RW</a>
                            </li>
                        </ul>
                    </li>
                        <a href="{{url('/ibadah')}}"><i class="material-icons">location_city</i><span> Data Tempat Ibadah</span></a>
                    </li>
                    <li>
                        <a href="{{url('/posyandu')}}"><i class="material-icons">child_care</i><span>Data Posyandu</span></a>
                    </li>
                    <li>
                        <a class="menu-toggle"><i class="material-icons">school</i><span>Data Sekolah</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/sekolah')}}">SD</a>
                            </li>
                            <li>
                                <a href="{{url('/sekolah_smp')}}">SMP</a>
                            </li>
                            <li>
                                <a href="{{url('/sekolah_sma')}}">SMA</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    @endif
                </ul>
            </div>
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="{{asset('javascript:void(0);')}}"> M.Soneta R. - Untan</a>.
                </div>
                <div class="version">
                    <b>Rekayasa Sistem Komputer</b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
@yield('konten')

    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>


    <script src="{{ url('plugins/multi-select/js/jquery.multi-select.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{asset('plugins/jquery-steps/jquery.steps.js')}}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{asset('plugins/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>

    <!-- TinyMCE -->
    <script src="{{asset('plugins/tinymce/tinymce.js')}}"></script>
    <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>

     <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{asset('js/pages/index.js')}}"></script>
    <script src="{{asset("js/admin.js")}}"></script>
    <script src="{{asset('js/pages/forms/editors.js')}}"></script>
    <script src="{{asset('js/pages/forms/form-validation.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('js/demo.js')}}"></script>

</html>
