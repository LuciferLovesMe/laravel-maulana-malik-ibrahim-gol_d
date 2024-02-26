<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    {{-- @include('sweet::alert') --}}

    <div class="main-wrapper" id="main-wrapper">

        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <h5 class="loader__label">Test App</h5>
            </div>
        </div>

        <header class="topbar">

            <nav>
                <div class="nav-wrapper">

                    <a href="javascript:void(0)" class="brand-logo" style="padding:10px">
                        <!-- <span class="text">
                            <img class="light-logo" src="../../assets/images/logo-light-text.png">
                            <img class="dark-logo" src="../../assets/images/logo-text.png">
                        </span> -->
                        <h4 class="m-t-10 m-l-30" style="font-weight: 800;color: #ffffff;">Test App</h4>
                    </a>

                    <ul class="right">

                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="{{ asset('images/users.jpg') }}" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li style="background-color: #263145;">
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{ asset('images/users.jpg') }}" alt="user">
                                        </div>
                                        <div class="u-text">
                                            {{-- <h4 style="color: lightgrey">{{ Auth::user()->name }}</h4>
                                            <p style="color: lightgrey">{{ Auth::user()->email }}</p> --}}
                                        </div>
                                    </div>
                                </li>
                                <li style="background-color: #7158fd;" role="separator" class="divider"></li>
                                <li class="log" style="background-color: #263145;">
                                    {{-- <a href="{{ route('logout') }}" style="color: lightgrey" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="material-icons">power_settings_new</i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> --}}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-profile m-t-10">
                        <style>
                            .user-profile {
                                background-color: #273146;
                                /*background-image: url(" {{ asset('images/auth-bg2.jpg') }}");*/
                                padding: 25px 15px 0px;
                            }
                        </style>
                        <div class="user-name">
                            <div class="row">
                                <div class="col" style="padding-left: 0px; padding-right: 0px">
                                    <img src="{{ asset('images/users.jpg') }}" alt="user" width="50" class="circle profile-pic" style="border: solid 3px #7158fd;">
                                </div>
                                <div class="col m-t-5">
                                    {{-- <p class="white-text name" style="font-size: 13px;">
                                        <span class="hidden" style="color:#ffffff;">
                                            {{ Auth::user()->name }}
                                        </span><br>
                                    </p>
                                    <p class="name" style="color:#ffffff;font-size: 14px;">
                                        {{ Auth::user()->email }}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="collapsible m-t-15">
                        {{-- <li class="small-cap"><span class="hide-menu">Beranda</span></li>
                        <li>
                            <a href="/home" class="collapsible-header m-t-5">
                                <i class="material-icons">dashboard</i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/viewqr" class="collapsible-header">
                                <i class="material-icons">print</i>
                                <span class="hide-menu">Print QR Code</span>
                            </a>
                        </li>
                        <li>
                            <a href="/berita" class="collapsible-header">
                                <i class="material-icons">assignment_turned_in</i>
                                <span class="hide-menu">Berita Acara</span>
                            </a>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Voting</span></li>
                        <li>
                            <a href="/kandidat" class="collapsible-header m-t-5">
                                <i class="material-icons">assignment_ind</i>
                                <span class="hide-menu">Kandidat</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pemilihan" class="collapsible-header">
                                <i class="material-icons">touch_app</i>
                                <span class="hide-menu">Pemilihan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/hasil" class="collapsible-header">
                                <i class="material-icons">devices</i>
                                <span class="hide-menu"> Hasil Pemilihan</span>
                            </a>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Pengguna</span></li>
                        <li>
                            <a href="/peserta" class="collapsible-header m-t-5">
                                <i class="material-icons">group</i>
                                <span class="hide-menu">Peserta</span>
                            </a>
                        </li>
                        <li>
                            <a href="/jurusan" class="collapsible-header">
                                <i class="material-icons">library_books</i>
                                <span class="hide-menu">Jurusan</span>
                            </a>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Pengaturan</span></li>
                        <li>
                            <a href="/setting" class="collapsible-header m-t-5">
                                <i class="material-icons">schedule</i>
                                <span class="hide-menu">Waktu</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0 ">@yield('headtitle')</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">@yield('page')</a>
                        <a href="#!" class="breadcrumb">@yield('subtitle')</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30">Test App. Developed by <a href="#">RPL Gen 12</a>.</footer>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- <a href="#" data-target="right-slide-out"
            class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i
            class="material-icons">settings</i></a> -->

        <div class="chat-windows"></div>
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>

    @include('layouts.script')

</body>


</html>