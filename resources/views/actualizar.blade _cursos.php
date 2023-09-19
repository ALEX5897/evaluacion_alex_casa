@extends('layout/plantilla')

@section("", "")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar </h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('cursos.update', $cursos->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre dle curso</label>
                <input type="text" name="nombre_curso" class="form-control" required value="{{$cursos->paterno}}">
                <label for="">Nivel del curso</label>
                <input type="text" name="nivel" class="form-control" required value="{{$cursos->materno}}">
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection


