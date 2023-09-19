<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    
    public function index()
    {
        //pagina de inicio 
        $datos = Cursos::orderBy('nombre_curso', 'desc')->paginate(3);
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        //el formulario donde 
        //nosotros agregamos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $cursos = new Cursos();
        $cursos->nombre_curso = $request->post('nombre_curso');
        $cursos->nivel = $request->post('nivel');
       
        $cursos->save();

        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $cursos = Cursos::find($id);
        return view("eliminar" , compact('cursos'));
    }

    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        
        $cursos = Cursos::find($id);
        return view("actualizar" , compact('cursos'));
        
    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $cursos = Personas::find($id);
        $cursos->nombre_curso = $request->post('nombre_curso');
        $cursos->nivel = $request->post('nivel');
    
        $cursos->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
        
    }

    public function destroy($id)
    {
        $cursos = Cursos::find($id);
        $cursos->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
