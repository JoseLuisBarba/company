@extends('layout')

@section('title', 'Personas')

@section('content')


    <h2>Personas <span class="badge badge-primary"> # </span></h2>


    <div class="container py-5">
        <h2>Personas <span class="badge badge-primary"> # </span></h2>
        <a
            type="button"
            class="btn btn-link btn-rounded btn-sm fw-bold"
            data-mdb-ripple-color="dark"
            href="{{ route('personas.create') }}"
        >
            Nueva Persona
        </a>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

            @if($personas)    
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>
                        <th>Código</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                            <tr>
                                <td>
                                    <p class="fw-normal mb-1">{{ $persona->nPerCodigo }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $persona->cPerApellido }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $persona->cPerNombre }}</p>
                                </td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-link btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark"
                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    <a
                                        type="button"
                                        class="btn btn-link btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark"
                                        href="{{ route('personas.show', $persona->nPerCodigo) }}"
                                    >
                                        Ver
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3>No hay personas que mostrar</h3>
            @endif
        </div>
    </div>


@endsection