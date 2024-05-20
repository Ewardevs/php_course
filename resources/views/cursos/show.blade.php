@extends('layouts/plantilla')

@section('title', 'Cursos ' . $curso->nombre)

@section('content')

    <p>Bienvenido al curso <?= $curso['nombre'] ?></p>
    <a href="{{ route('cursos.index') }}">Volver</a>
    <a href="{{ route('cursos.edit', $curso) }}">editar</a>
    <p><strong>Categoria : </strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">eliminar</button>
    </form>
@endsection
