<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Provisoire</title>

    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('css/material.min.css')}}">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="{{asset('css/ripples.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors/indigo.css')}}" media="screen"/>


    <!-- Icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link href="{{asset('css/card.gallery.css')}}" rel="stylesheet">

</head>
<body>

<div id="app">
    <main class="col-xl-12">
        @yield('content')
    </main>
</div>
</body>

<script src="{{asset ('js/app.js')}}"></script>
<script src="{{asset('js/jquery-min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('js/jquery.inview.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/scroll-top.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<script src="{{asset('js/ripples.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/form-validator.min.js')}}"></script>
<script src="{{asset('js/contact-form-script.min.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery.vide.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/chart-data.js')}}"></script>
<script src="{{asset('js/easypiechart.js')}}"></script>
<script src="{{asset('js/easypiechart-data.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</html>
