@extends('layout/plantilla')

@section("", "")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar un curso!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Nombre curso</th>
                        <th>Nivel</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $cursos->nombre_curso }}</td>
                            <td>{{ $cursos->nivel }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('cursos.destroy', $cursos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("personas.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection


