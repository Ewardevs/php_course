@extends('layouts/plantilla')

@section('title', 'Crear curso')

@section('content')

    <a href="#">en esta pagina podras crear un curso</a>
    <form action="{{ route('cursos.store') }}" method="post">
        @csrf
        <label for="name">
            Nombre :
            <input type="text" name="nombre">
        </label>
        <label for="descripcion">
            Descripcion :
            <textarea type="text" name="descripcion"></textarea>
        </label>
        <label for="categoria">
            Categoria :
            <input type="text" name="categoria">
        </label>

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
