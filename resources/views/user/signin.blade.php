@extends('layouts.master')
@section('title')
Sign in
@endsection
@section('content')

<div class="signup">
    <div class="">
        <h1 style="padding-bottom:10px;">Sign in</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error}} </p>
                @endforeach
        </div>
        @endif
        <form action="{{route('user.signin')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email"class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Sign in</button>
            {{ csrf_field() }}
        </form>
        <p>Don't have an account? <a href="{{ route('user.signup') }}">Sign up</a></p>
    </div>
</div>
@endsection