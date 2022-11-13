<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="{{asset('public/image/hospital.png')}}">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lumbeni Hospital PVT.LTD</title>

    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('public/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/plugins/timeline/timeline.css')}}" rel="stylesheet">

    <link href="{{asset('public/css/sb-admin.css')}}" rel="stylesheet">

</head>
<body>
    
<div id="wrapper">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    @include('layout.header')
    @include('layout.aside')
</nav>
</div>
    @yield('content')
    @include('layout.script')

</body>

</html>