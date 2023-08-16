<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="admin_assets/"
    data-template="vertical-menu-template-free"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
        <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ url("img/assets/logo_sifest.png") }}"
        />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ url("admin_assets/vendor/fonts/boxicons.css") }}" />

        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{ url("admin_assets/vendor/css/core.css") }}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{ url("admin_assets/vendor/css/theme-default.css") }}"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="{{ url("admin_assets/css/demo.css") }}"/>

        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="{{ url("admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css") }}"
        />

        <link
            rel="stylesheet"
            href="{{ url("admin_assets/vendor/libs/apex-charts/apex-charts.css") }}"
        />
        
        <link
            rel="stylesheet"
            href="{{ url("vendor/datatables/datatables.min.js") }}"
        />

        

        <!-- Page CSS -->
        @if ($nav["active"] === "Auth")
            <link rel="stylesheet" href="{{ url("admin_assets/vendor/css/pages/page-auth.css") }}" />
        @endif

        <!-- Helpers -->
        <script src="{{ url("admin_assets/vendor/js/helpers.js") }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ url("admin_assets/js/config.js") }}"></script>
    </head>

    <body>
        @auth("admin") 
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- / Layout page -->
                @include('layouts/admin.navbar')

                <div class="layout-page">
                    <!-- Navbar -->
                    <nav
                        class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar"
                    >
                        <div
                            class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
                        >
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div
                            class="navbar-nav-right d-flex align-items-center"
                            id="navbar-collapse"
                        >
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <input 
                                        type="text"
                                        class="form-control border-0 fs-4 shadow-none"
                                        placeholder="HIMSI FASILKOM UNSRI"
                                    />
                                </div>
                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->
                                <li class="nav-item lh-1 me-3">

                                </li>

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a
                                        class="nav-link dropdown-toggle hide-arrow"
                                        href="javascript:void(0);"
                                        data-bs-toggle="dropdown"
                                    >
                                        <div class="avatar avatar-online">
                                            <img
                                                src="{{ url("admin_assets/img/avatars/1.png") }}"
                                                alt
                                                class="w-px-40 h-auto rounded-circle"
                                            />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img
                                                                src="{{ url("admin_assets/img/avatars/1.png") }}"
                                                                alt
                                                                class="w-px-40 h-auto rounded-circle"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block"
                                                            >SI FEST 2022</span
                                                        >
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <form action="{{ route("admin_logout") }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger mx-4">
                                                    <i class="bx bx-power-off me-2"></i>
                                                    <span class="align-middle">Log Out</span>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                    
                    @yield('index')
                </div>
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->
        @endauth 

        @if ($nav["active"] === "Auth")
            @yield('login')
        @endif

        <!-- Core JS -->
        <!-- build:js admin_assets/vendor/js/core.js -->
        <script src="{{ asset("admin_assets/vendor/libs/jquery/jquery.js") }}"></script>
        <script src="{{ asset("admin_assets/vendor/libs/popper/popper.js") }}"></script>
        <script src="{{ asset("admin_assets/vendor/js/bootstrap.js") }}"></script>
        <script src="{{ asset("admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") }}"></script>
        <script src="{{ asset("admin_assets/vendor/js/menu.js") }}"></script>
        <!-- endbuild -->
        
        <!-- Vendors JS -->
        <script src="{{ asset("admin_assets/vendor/libs/apex-charts/apexcharts.js") }}"></script>
        <script src="{{ asset("vendor/datatables/datatables.min.js") }}"></script>
        
        <!-- Main JS -->
        <script src="{{ asset("admin_assets/js/main.js") }}"></script>
        <script src="{{ asset("admin_assets/js/crud.js") }}"></script>

        <!-- Page JS -->
        <script src="{{ asset("admin_assets/js/dashboards-analytics.js") }}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
