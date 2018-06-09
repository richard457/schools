@extends('layouts.app')
@section('content')
    <div class="modal" id="myModal">
        <form method="POST" action="/add_question">
            <div class="modal-dialog">
                <div class="modal-content">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Question</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <select name="question">
                            <option value="One   kkkk"></option>
                            {{--<input type="text" class="form-control mt-1"  placeholder="question here">--}}
                            @foreach($default_questions as $q)
                                <option value="{{$q->question}}">{{$q->question}}</option>
                            @endforeach
                        </select>
                        <span>Add Answer by y/n</span>
                        <div class="row">
                            <div class="col-md-5 mt-4">

                                <input type="text" class="form-control mt-2" name="answer_one">
                                <input type="text" class="form-control mt-2" name="answer_two">
                                <input type="text" class="form-control mt-2" name="answer_three">

                            </div>
                            <div class="col-md-5">
                                <span>Mark it as the right answer</span>
                                <input type="text" class="form-control mt-2" name="choice_one" placeholder="no">
                                <input type="text" class="form-control mt-2" name="choice_two" placeholder="no">
                                <input type="text" class="form-control mt-2" name="choice_three" placeholder="no">
                            </div>
                        </div>
                        <div class="col-md-5 mt-4">
                            <select name="lang">
                                <option name="value">Kin</option>
                                <option name="value">fr</option>
                                <option name="value">eng</option>
                            </select>

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


    <body>
    <div class="container-fluid" id="wrapper">
        <div class="row">
            <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

                <a href="{{route('logout')}}" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
            </nav>
            <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
                <header class="page-header row justify-center">
                    <div class="col-md-6 col-lg-8">

                    </div>

                    <div class="clear"></div>
                </header>
                <section class="row">
                    <div class="col-sm-12">
                        <section class="row">
                            <div class="col-md-12 col-lg-8">

                                <div class="row">
                                    <div class="row">
                                        <form class="ml-1">
                                            <input name="lang" value="kin" type="hidden">
                                            <a class="btn btn-primary" href="/home?lang=kin">Kinyarwanda</a>
                                        </form>
                                        <form class="ml-1">
                                            <input name="lang" value="fr" type="hidden">
                                            <a class="btn btn-primary" href="/home?lang=fr">Francais</a>
                                        </form>
                                        <form class="ml-1">
                                            <input name="lang" value="eng" type="hidden">
                                            <a class="btn btn-primary" href="/home?lang=eng">English</a>
                                        </form>
                                    </div>
                                    <div class="container">

                                        <h1 style="margin-left: 430px">{{$mark}}/ 20 Marks</h1>
                                    </div>
                                    @foreach($questions as $f)

                                        @if($f->marked != 1)
                                            <div class="card col-md-5 ml-1 mt-2" style="width: 18rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title"><span
                                                                class="badge badge-light">{{$f->id}}</span></h5>
                                                    <p class="card-text">{{$f->question}}</p>

                                                    <a href="add_answer/{{$f->id}}" class="btn btn-primary">{{$answer}}</a>
                                                </div>
                                            </div>

                                        @elseif($count <10)
                                            <div class="card col-md-5 ml-1 mt-2" style="width: 18rem;">
                                                <div class="card-body">
                                                    <p>No Question sir</p>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                       data-target="#myModal">Add Test</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    @if($count < 10 || $count ==0)
                                        @if($role == 'super')
                                            <div class="card col-md-5 ml-1 mt-2" style="width: 18rem;">
                                                <div class="card-body">
                                                    <p>No Question sir</p>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                       data-target="#myModal">Add Test</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>


                        </section>

                    </div>
                </section>
            </main>
        </div>
    </div>


    </body>

@endsection
