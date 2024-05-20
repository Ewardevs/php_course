@extends('layouts/plantilla')

@section('title', 'Crear curso')

@section('content')

    <a href="#">en esta pagina podras crear un curso</a>
    <form action="{{ route('cursos.store') }}" method="post">
        @csrf
        <label for="name">
            Nombre :
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        @error('nombre')
            <br>
            {{ $message }}
            <br>
        @enderror
        <br>
        <label for="descripcion">
            Descripcion :
            <textarea type="text" name="descripcion">{{ old('descripcion') }}</textarea>
        </label>
        @error('descripcion')
            <br>
            {{ $message }}
            <br>
        @enderror
        <br>
        <label for="categoria">
            Categoria :
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        @error('categoria')
            <br>
            {{ $message }}
            <br>
        @enderror
        <label for="name">
            slug :
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>
        @error('slug')
            <br>
            {{ $message }}
            <br>
        @enderror
        <br>

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
