@extends('layouts.master')
@section('title')
Sign Up
@endsection
@section('content')

<div class="signup">
    <div class="">
        <h1 style="padding-bottom:10px;">Sign Up</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error}} </p>
                @endforeach
        </div>
        @endif
        <form action="{{route('user.signup')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email"class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Sign Up</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection