@extends('layouts.app')
@section('content')
<div class="container mt-5">
  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="form-group has-danger">
          <label class="sr-only" for="email">E-Mail Address</label>
          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="sr-only" for="password">Password</label>
          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          </div>
        </div>
          <div class="container" style="margin-left: 125px;">
              <button type="submit" class="btn btn-primary w-50">Login</button>
          </div>
      </div>


    </div>

  </form>
</div>   

@endsection