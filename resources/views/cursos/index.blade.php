@extends('layouts/plantilla')

@section('title', 'Cursos ')

@section('content')

    <a href="#">Bienvenido a la pagina Principal</a>
    <a href="{{ route('cursos.create') }}">Crear curso</a>


    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso['id']) }}">
                    <?= $curso['nombre'] ?>
                </a>
            </li>
        @endforeach


    </ul>
    {{ $cursos->links() }}
@endsection
