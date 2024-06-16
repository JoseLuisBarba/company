@extends('layout')

@section('title', 'Crear Persona')

@section('content')



<div class="container py-5">
    <h2>Personas <span class="badge badge-primary"> # Crear </span></h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

            <form method="POST" action="{{ route('personas.store') }}">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                @csrf
                <div class="row mb-4">
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="cPerApellido" name="cPerApellido" class="form-control" />
                        <label class="form-label" for="cPerApellido">Apellido</label>
                    </div>
                    </div>
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="cPerNombre" name="cPerNombre" class="form-control" />
                        <label class="form-label" for="cPerNombre">Nombre</label>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="cPerDireccion" name="cPerDireccion" class="form-control" />
                        <label class="form-label" for="cPerDireccion">Dirección</label>
                    </div>
                    </div>
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="date" id="cPerFecNac" name="cPerFecNac" class="form-control" />
                        <label class="form-label" for="cPerFecNac">Fecha de Nacimiento</label>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="nPerEdad" name="nPerEdad" class="form-control" />
                        <label class="form-label" for="nPerEdad">Edad</label>
                    </div>
                    </div>
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <select type="text" id="cPerSexo" name="cPerSexo" class="form-control" />
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <label class="form-label" for="cPerSexo">Sexo</label>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="nPerSueldo" name="nPerSueldo" class="form-control" />
                        <label class="form-label" for="nPerSueldo">Sueldo</label>
                    </div>
                    </div>
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <select type="text" id="nPerEstado" name="nPerEstado" class="form-control" />
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                        <label class="form-label" for="nPerEstado">Estado</label>
                    </div>
                    </div>
                </div>

                <button type="submit"  class="btn btn-primary btn-block mb-4">Guardar</button>
            
            </form>

        </div>
</div>