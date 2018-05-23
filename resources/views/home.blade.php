@extends('layouts.app')

@section('content')
    <body>

    <div class="row">
        @foreach($questions as $f)

            @if($f->marked != 1)
            <div class="card col-md-5 ml-1 mt-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-light">{{$f->id}}</span></h5>
                    <p class="card-text">{{$f->question}}</p>

                    <a href="add_answer/{{$f->id}}" class="btn btn-primary" >Answer</a>
                </div>
            </div>
            @else
                <div class="card col-md-5 ml-1 mt-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>No Question sir</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Test</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        {{--add_question--}}
        <form method="POST" action="/add_question">
        <div class="modal-dialog">
            <div class="modal-content">

                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Question</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <input type="text" class="form-control mt-1" name="question" placeholder="question here">
                    <span>Add Answer by y/n</span>
                    <div class="row">
                        <div class="col-md-5 mt-4">
                            <input type="text" class="form-control mt-2" name="question">
                            <input type="text" class="form-control mt-2" name="question">
                            <input type="text" class="form-control mt-2" name="question">
                        </div>
                        <div class="col-md-5">
                            <span>Mark it as the right answer</span>
                            <input type="text" class="form-control mt-2" name="answer" placeholder="no">
                            <input type="text" class="form-control mt-2" name="answer" placeholder="no">
                            <input type="text" class="form-control mt-2" name="answer" placeholder="no">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-1">Add Question</button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
        </form>
    </div>
    </body>

@endsection
