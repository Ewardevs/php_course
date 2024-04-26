<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Curso;


class CursoController extends Controller
{
    public function index()
    {
        $curso = Curso::orderBy("id", "desc")->paginate();

        // 8compact()
        return view("cursos.index", ["cursos" => $curso]);
    }

    public function create()
    {
        return view("cursos.create");
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();

        return redirect()->route("cursos.show", $curso);
    }

    public function show(Curso $curso)
    {
        return view("cursos.show", ["curso" => $curso]);
    }

    public function edit(Curso $curso)
    {

        return view("cursos.edit", ["curso" => $curso]);
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route("cursos.show", $curso);
    }
}
