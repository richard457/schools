@extends('layouts.app')
@section('content')

        {{--<nav-component></nav-component>--}}
        {{--<div class="col-lg-12">--}}
            {{--<div class="row">--}}
            {{----}}
            {{--<left-side-component></left-side-component>--}}
            {{--<main-component></main-component>--}}
            {{--</div>--}}
        {{--</div>--}}

    <div class="col-lg-12">
        {{--<login-component></login-component>--}}
        <div style="margin-top:220px;max-width:400px;margin-left:350px;">
            <form method="POST" action="{{ route('login') }}" >
                @csrf

                <div class="form-group row">

                    <div class="col-md-12" style="margin-left:140px;">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row" >

                    <div class="col-md-12" style="margin-left:140px;">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                {{--<div class="form-group row">--}}
                    {{--<div class="col-md-6 offset-md-4">--}}
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" style="border-radius:0px;width:100px;margin-left:120px;" class="btn">
                            Login
                        </button>

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--Forgot Your Password?--}}
                        {{--</a>--}}
                    </div>
                </div>
            </form>
        </div>

    </div>


@endsection