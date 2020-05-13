<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0-beta.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Laravel') }} - Administrator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main styles for this application-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Summernote Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">

    <style>
        .sidebar .sidebar-nav {
            width: 100%;
        }

        .sidebar .nav-link {
            color: #ffffff;
            letter-spacing: .015rem;
        }

        .sidebar .nav-link:hover {
            color: #ffffff;
            rgba(0, 0, 0, 0.15);
        }

        .sidebar .nav-link:hover .nav-icon {
            color: #ffffff;
        }

        .sidebar .nav-dropdown.open .nav-link {
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.15);
        }

        .sidebar .nav-dropdown.open .nav-link:hover {
            color: #ffffff;
        }
    </style>
    @stack('style')

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.administrator.navigations.topbar')
    <div class="app-body">
        @include('layouts.administrator.navigations.sidebar')
        <main class="main">
            <!-- Breadcrumb-->
            @yield('breadcrumb')
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="container-fluid">
                <div id="app" class="animated fadeIn">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('layouts.administrator.navigations.footer')

    <!-- Main scripts for this application -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            <?php
            if (Session::has('success')) {
                echo 'toastr.success("' . Session::get('success') . '");';
            }

            if (Session::has('error')) {
                echo 'toastr.error("' . Session::get('error') . '");';
            }
            ?>
        });
    </script>
    @stack('script')
</body>

</html>