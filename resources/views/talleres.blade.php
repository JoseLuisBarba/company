@extends('layout')

@section('title', 'Talleres')

@section('content')
    <h2>Talleres <span class="badge badge-primary"> # </span></h2>

    <ul>
        @foreach ($talleres as $item)
            <li>{{ $item['titulo'] }}</li>
        @endforeach
    </ul>

@endsection