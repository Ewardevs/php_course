@extends('layouts/plantilla')

@section('title', 'Cursos ' . $curso->nombre)

@section('content')

    <p>Bienvenido al curso <?= $curso['nombre'] ?></p>
    <a href="{{ route('cursos.index') }}">Volver</a>
    <a href="{{ route('cursos.edit', $curso) }}">editar</a>
    <p><strong>Categoria : </strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>
@endsection
