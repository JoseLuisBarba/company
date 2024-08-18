@extends('layout')

@section('title', 'Crear Persona')

@section('content')

<div class="container py-5">
    <h2>Personas <span class="badge badge-primary"> # Crear </span></h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
        @include('partials.validation-errors')
        <form  
            action="{{ route('personas.store') }}" 
            method="post" 
            class="row g-3 needs-validation" novalidate
            enctype="multipart/form-data"
        >
            @include('partials.form', ['btnText' => 'Guardar']) 
        </form>
    </div>
</div>