<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
@include('admin.includes.css')
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

@include('admin.includes.header')

    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            @include('admin.includes.menu')
        </div>
    </div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('body')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
</div>
<!-- END layout-wrapper -->
</div>
@include('admin.includes.js')
</body>


</html>
