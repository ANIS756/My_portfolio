<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ProMan - Personal Portfolio HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

@include('website.includes.css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
@include('website.includes.header')

@yield('body')

@include('website.includes.footer')

@include('website.includes.js')
</body>

</html>
