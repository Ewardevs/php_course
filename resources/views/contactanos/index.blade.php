@extends('layouts/plantilla')

@section('title', 'Contactanos')

@section('content')

    <h1>Dejanos un mensajes</h1>
    <form method="post" action="{{ route('contactanos.store') }}">
        @csrf
        <label>
            nombre
            <input type="text" name="nombre">
        </label>
        @error('nombre')
            <strong> {{ $message }} </strong>
        @enderror
        <br>
        <label>
            correo
            <input type="text" name="correo">
        </label>
        @error('correo')
            <strong>{{ $message }}</strong>
        @enderror
        <br>
        <label>
            mensaje
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        @error('mensaje')
            <strong>{{ $message }}</strong>
        @enderror
        <br>
        <button type="submit">Enviar mensaje</button>

        @if (session('info'))
            <script>
                alert("{{ session('info') }}")
            </script>
        @endif

    </form>
@endsection
