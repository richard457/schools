@extends('layouts.admin')

@section('content')


    <div class="modal" id="uploadModal">

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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Upload Image</button>
                </div>
                <section class="row">
                    <div class="col-sm-12">

                    </div>
                </section>
            </main>
        </div>

        <section class="gallery-block cards-gallery">
            <div class="container">

                <div class="row">

                    @foreach($posts as $post)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"   href="add_detail/{{$post->id}}">
                                <img src="{{$post->image_url}}" alt="Card Image" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <!--data-target="#addInfoModal"-->
                                <h6><a data-toggle="modal" href="add_detail/{{$post->id}}">{{$post->description}}</a></h6>
                                <p class="text-muted card-text">{{$post->description}}</p>
                            </div>
                            <a  class="btn btn-primary remove-button bg-white" href="remove_this/{{$post->id}}">Remove</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>


    </body>

@endsection
