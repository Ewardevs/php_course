@extends('layouts/plantilla')

@section('title', 'editar curso')

@section('content')

    <a href="#">en esta pagina podras editar un curso</a>
    <form action="{{ route('cursos.update', $curso) }}" method="post">
        @csrf
        @method('put')
        <label for="name">
            Nombre :
            <input type="text" name="nombre" value="{{ $curso->nombre }}">
        </label>
        <label for="descripcion">
            Descripcion :
            <textarea type="text" name="descripcion">{{ $curso->descripcion }}</textarea>
        </label>
        <label for="categoria">
            Categoria :
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>

        <br>
        <button type="submit">actualizar</button>
    </form>
@endsection
