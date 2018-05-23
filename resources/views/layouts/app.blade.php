<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Provisoire</title>

    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
</head>
<body>

    <div id="app">
        <main class="container">
            @yield('content')
        </main>
    </div>
</body>

<script src="{{asset ('js/app.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</html>
