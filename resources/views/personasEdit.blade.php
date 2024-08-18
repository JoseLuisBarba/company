@extends('layout')

@section('title', 'Editar Persona')

@section('content')

<div class="container py-5">
    @auth
        <h2>Personas <span class="badge badge-primary"> # Editar </span></h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <img
                src="/storage/{{ $persona->image }}"
                alt="{{ $persona->cPerNombre }}"
                width="300"
                height="300"
            >
            @include('partials.validation-errors')
            <form  action="{{ route('personas.update', $persona) }}" method="post"  enctype="multipart/form-data" class="row g-3 needs-validation"  novalidate>
            @method('PATCH')
                @include('partials.form', ['btnText' => 'Actualizar'])
            </form>
        </div>
    @endauth   
</div>