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
@include('admin.includes.menu')



</div>
<!-- END layout-wrapper -->
@yield('body')
@include('admin.includes.js')
</body>


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->
</html>
