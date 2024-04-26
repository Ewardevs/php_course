<?php

namespace App\Http\Controllers;


class PeliculasController extends Controller
{
    public function showPeliculas()
    {
        return view("peliculas.peliculas");
    }

    public function showCategoria($categoria)
    {
        return view("peliculas.showCategoria", ["categoria" => $categoria]);
    }

    public function sumar($num)
    {
        if ($num > 18) {
            return view("peliculas.peliculas", ["res" => "es mayor de edad"]);
        } else {
            return view("peliculas.peliculas", ["res" => "es menor de edad"]);
        }
    }
}
