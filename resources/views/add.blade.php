@extends('layouts.app')

@section('content')
<form method="POST" action="questions">
    @csrf
    <input id="question" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="question" value="{{ old('question') }}" required autofocus>

    <button type="submit" class="btn btn-primary">
        Add Question
    </button>
</form>
@endsection