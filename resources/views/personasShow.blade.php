@extends('layout')

@section('title', 'Personas')

@section('content')


    <div class="container py-5">
        <h2>Personas <span class="badge badge-primary"> # {{ $persona->id }}</span></h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

                <div class="card" style="width: 18rem;">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/062.webp" class="card-img-top" alt="Chicago Skyscrapers"/>
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                        <li class="list-group-item px-4">Sueldo  $ {{ $persona->nPerSueldo }}</li>
                        <li class="list-group-item px-4">Estado: {{ $persona->nPerEstado}}</li>
                    </div>
                    <ul class="list-group list-group-light list-group-small">
                        <li class="list-group-item px-4">Edad: {{ $persona->nPerEdad }}</li>
                        <li class="list-group-item px-4">Fecha de Nacimiento: {{ $persona->nPerFecNac }}</li>
                        <li class="list-group-item px-4">Sexo: {{ $persona->cPerSe }}</li>
                        <li class="list-group-item px-4">Dirección: {{ $persona->cPerDireccion }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('personas.edit', $persona) }}" class="card-link">Edit</a>
                        <form action="{{ route('personas.destroy', $persona) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="card-link">Eliminar</button>
                        </form>
                    </div>
                </div>

            </div>
    </div>