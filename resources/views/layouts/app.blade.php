<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href='css/app.css' rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

<div  id="app">

    @yield('content')

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-mCNPoZBZge-IeeMjSJFVX1RITECFR18" ></script>


<script src="{{asset ('js/animate.js')}}"></script>
<script src="{{asset ('js/sliding.js')}}"></script>

<script src="{{asset ('js/app.js')}}"></script>
<script src="{{asset ('js/easing.js')}}"></script>


</body>

</html>
