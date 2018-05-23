@extends('layouts.app')

@section('content')
    <body>

    <div class="row">
    @foreach($answers as $f)
        <div class="card col-md-5 ml-1 mt-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><span class="badge badge-light">{{$f->id}}</span></h5>
                <p class="card-text">{{$f->answer}}</p>
                <a href="/save_answer/{{$f->id}}" class="btn btn-primary">Answer</a>
            </div>
        </div>
    @endforeach
    </div>
    </body>

@endsection
