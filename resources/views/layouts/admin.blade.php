<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bem Untan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
    @yield('css')

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo_kbm.png') }}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block">Admin BEM</a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Master Data</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item">
                                    <a href="{{Route('periode.index')}}">Periode</a>
                                    <a href="{{Route('tag.index')}}">Tag</a>
                                    <a href="{{Route('struktur.index')}}">Struktur</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{Route('berita.index')}}" class='sidebar-link'>
                                <i class="bi bi-newspaper"></i>
                                <span>Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{Route('kegiatan.index')}}" class='sidebar-link'>
                                <i class="bi bi-check-all"></i>
                                <span>Kegiatan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{Route('informasi.index')}}" class='sidebar-link'>
                                <i class="bi bi-info"></i>
                                <span>Informasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{Route('anggota.index')}}" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Anggota</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{Route('kalender.index')}}" class='sidebar-link'>
                                <i class="bi bi-calendar-day"></i>
                                <span>Kalender</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('quill') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Quill Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('form') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Form</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('datatables') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Datatables Jquery</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('chartapexjs') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Form Jquery</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item">
                                    <a href="#">Form Modal</a>
                                    <a href="{{ route('form.jquery') }}">Without Modal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ asset('dist/index.html') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        @yield('content')
    </div>
    @yield('js')

    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/extensions/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/mazer.js') }}"></script>
</body>

</html>
