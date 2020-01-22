@extends('main')

@section('title', 'Home')

@section('content')
    @parent
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
@endsection
