<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Collapsible sidebar using Bootstrap 3</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style5.css">
</head>
<body>

    <div id="app" class="col-lg-12">
        <main class="row">
            @yield('content')
        </main>
    </div>
</body>


<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-mCNPoZBZge-IeeMjSJFVX1RITECFR18" ></script>
<script src="{{asset ('js/animate.js')}}"></script>
<script src="{{asset ('js/sliding.js')}}"></script>
<script src="{{asset ('js/app.js')}}"></script>
<script src="{{asset ('js/easing.js')}}"></script>



<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</html>
