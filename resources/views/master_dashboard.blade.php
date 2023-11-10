<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/css/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    {{-- <link rel="stylesheet" href="{{ asset('https://pro.fontawesome.com/releases/v5.10.0/css/all.css') }}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('images/logo2.png') }}" rel="icon" type="image/ico" />
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/Select/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/assetsdash/images/favicon.png') }}" />
    @yield('styles')
    @livewireStyles

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                {{-- <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}"><img --}}
                        {{-- src="{{ asset('images/logokoraforever.png') }}" alt="logo" style="margin-top: 35px;"/></a> --}}
                <a class="sidebar-brand brand-logo-mini" href="{{ route('dashboard') }}">
                    {{-- <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /> --}}
                </a>
            </div>
            <ul class="nav" style="margin-top: 50px">
                {{-- dashboard --}}
                <li class="nav-item menu-items {{ Request::is('dashboard-match-live-team') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                {{-- Create Matches --}}
                {{-- <li class="nav-item menu-items {{ Request::is('dashboard/create-matches') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('create_matches') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title"> Create Matches </span>
                    </a>
                </li> --}}
                {{-- leagues --}}
                <li class="nav-item menu-items {{ Request::is('dashboard/leagues') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('create_leagues') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-soccer"></i>
                        </span>
                        <span class="menu-title">Leagues</span>
                    </a>
                </li>
                {{-- Teams --}}
                <li class="nav-item menu-items {{ Request::is('dashboard/teams') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/teams') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Teams</span>
                    </a>
                </li>
                {{-- Commentators --}}
                {{-- <li class="nav-item menu-items {{ Request::is('dashboard/commentators') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('commentators.dashboard') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-soccer"></i>
                        </span>
                        <span class="menu-title">Commentators</span>
                    </a>
                </li> --}}
                {{-- Channel --}}
                {{-- <li class="nav-item menu-items {{ Request::is('dashboard/channel') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('channel.dashboard') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-video-switch"></i>
                        </span>
                        <span class="menu-title">Channel</span>
                    </a>
                </li> --}}
                {{-- Teams Leauge --}}
                {{-- <li class="nav-item menu-items {{ Request::is('dashboard/teams_leauge') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/teams_leauge') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Teams Leauge</span>
                    </a>
                </li> --}}
                {{-- Post --}}
                <li class="nav-item menu-items {{ Request::is('dashboard/create-news') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/create-news') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">News</span>
                    </a>
                </li>
                {{-- Tag --}}
                <li class="nav-item menu-items {{ Request::is('dashboard/tag') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('create_tags') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-soccer"></i>
                        </span>
                        <span class="menu-title">Tag</span>
                    </a>
                </li>
                {{-- TO WebSite --}}
                {{-- <li class="nav-item menu-items">
                    <a class="nav-link" target="__blank" href="{{ url('/') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">WebSite</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- partial -->
        <div class="page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
                        {{-- <img src="{{ asset('images/logo-mini.svg') }}" alt="logo" /> --}}
                    </a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    @if (Auth::user()->profile_photo_url)
                                    <img class="img-xs rounded-circle" src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}">
                                    @endif
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}
                                    </p>
                                    {{-- <i class="mdi mdi-menu-down d-none d-sm-block"></i> --}}
                                </div>
                            </a>
                            {{-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <div class="preview-item-content">
                                    <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1 text-small">{{ __('Profile') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="preview-item-content">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                            class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-logout text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject ellipsis mb-1 text-small">
                                                    {{ __('Log Out') }}</p>
                                            </div>
                                        </a>
                                    </form>
                                </div>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div> --}}

                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel" style="background-color: #2b303e">
                <div>
                    <!-- content  -->
                    @yield('content')
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- partial:partials/_footer.html -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/typeahead.js') }}"></script> --}}
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    @yield('scripts')
</body>

</html>
