<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculasController;

/*
|
| Formas de hacer routes
| Route::get('/', HomeController::class); este es con el __invoke
| Route::get('/', [HomeController::class, 'index']);
| 
*/

Route::get('/', [HomeController::class, 'index']);

Route::get("/sumar/{num}", [PeliculasController::class, "sumar"]);

Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', "index")->name("cursos.index");

    Route::get('cursos/create', "create")->name("cursos.create");

    Route::get('cursos/{curso}', "show")->name("cursos.show");

    Route::get("cursos/{curso}/editar", "edit")->name("cursos.edit");

    Route::post("cursos/", "store")->name("cursos.store");

    Route::put("cursos/{curso}", "update")->name("cursos.update");
});

Route::controller(PeliculasController::class)->group(function () {
    Route::get("peliculas/", "showPeliculas");

    Route::get("peliculas/{categoria}", "showCategoria");
});
