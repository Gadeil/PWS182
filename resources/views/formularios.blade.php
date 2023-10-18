@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('content')
    <h1 class="display-1 text-center text-danger mt-4">Forms</h1>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-primary fs-4 fw-semibold text-center">
                Introduce tus recuerdos aquí...
            </div>

            <div class="card-body">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf
                    <div class="mb-3">
                        <!-- etiqueta del input del título-->
                        <label class="form-label">Título</label>
                        <input type="text" name="txtTitulo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <!-- etiqueta del input del recuerdo-->
                        <label class="form-label">Recuerdo</label>
                        <input type="text" name="txtRecuerdo" class="form-control">
                    </div>
            
            </div>

            <div class="card-footer text-body-secondary">
               
                    <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
                </form>
            </div>
        </div> <!-- div tarjeta-->
    </div> <!-- div container-->
@endsection
