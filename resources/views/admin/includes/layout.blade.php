<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    @include('admin.includes.head')
    <title>ITrove Admin: @yield('title')</title>
    @yield('header-area')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('admin.includes.topbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('admin.includes.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    @include('admin.includes.footer')


    @include('admin.includes.foot')
    {{-- @include('sweetalert::alert') --}}
    @yield('script-area')

</body>
<!-- END: Body-->

</html>
