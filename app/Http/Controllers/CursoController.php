<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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

    public function store(StoreCurso $request)
    {


        // $curso = new Curso();
        // $curso->nombre = $request->nombre;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();


        $curso = Curso::create($request->all());

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
        $request->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "categoria" => "required",
            "slug" => "required|unique:cursos,slug," . $curso->id
        ]);
        // $curso->nombre = $request->nombre;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();
        $curso->update($request->all());
        return redirect()->route("cursos.show", $curso);
    }

    public function destroy(Curso $curso)
    {

        $curso->delete();
        return redirect()->route("cursos.index");
    }
}
