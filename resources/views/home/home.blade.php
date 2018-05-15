@extends('layouts.app')

@section('content')    
    @guest
        @include('home.guest')
    @else
        @include('home.user')
    @endguest
@endsection
