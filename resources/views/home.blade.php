@extends('layouts.admin')

@section('content')


    <div class="modal" id="myModal">

        <form method="POST" action="/upload" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">

                @csrf
                <div class="modal-header">
                   <input type="file" name="picture">
                </div>
            <button class="btn btn-primary rounded-0" type="submit">Upload</button>
            </div>
        </div>
        </form>
    </div>
    </body>


    <body>
    <div class="container-fluid" id="wrapper">
        <div class="row">
            <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

                <a href="{{route('logout')}}" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
            </nav>
            <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
                <div class="m-lg-5 container" style="margin-left: 445px">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload Image</button>
                </div>
                <section class="row">
                    <div class="col-sm-12">

                    </div>
                </section>
            </main>
        </div>
    </div>


    </body>

@endsection
