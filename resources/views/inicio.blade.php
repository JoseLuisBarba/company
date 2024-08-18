@extends('layout')

@section('title', 'Inicio')

@section('content')
    <h2>Inicio <span class="badge badge-primary"> # </span></h2>
    <h3>
        @auth
            {{ auth()->user()->name }}
        @endauth
    </h3>
    
@endsection