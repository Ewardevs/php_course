<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculasController;
use Illuminate\Support\Facades\Mail;

/*
|
| Formas de hacer routes
| Route::get('/', HomeController::class); este es con el __invoke
| Route::get('/', [HomeController::class, 'index']);
| 
*/



// Route::get('/', [HomeController::class, 'index']);

// Route::get("/sumar/{num}", [PeliculasController::class, "sumar"]);

// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', "index")->name("cursos.index");

//     Route::get('cursos/create', "createView")->name("cursos.create");

//     Route::get('cursos/{curso}', "show")->name("cursos.show");

//     Route::get("cursos/{curso}/editar", "edit")->name("cursos.edit");

//     Route::post("cursos/", "store")->name("cursos.store");

//     Route::put("cursos/{curso}", "update")->name("cursos.update");

//     Route::delete("cursos/{curso}/delete", "delete")->name("curso.delete");
// });

// Route::controller(PeliculasController::class)->group(function () {
//     Route::get("peliculas/", "showPeliculas");

//     Route::get("peliculas/{categoria}", "showCategoria");
// });


// Route::resource("yes", CursoController::class)->parameters(["yes" => "curso"])->names("cursos");
Route::get("/", function () {
    return view("index");
})->name("home");

Route::view('nosotros', 'nosotros')->name("nosotros");

Route::get('contactanos', [ContactanosController::class, "index"])->name("contactanos.index");
Route::post('contactanos', [ContactanosController::class, "store"])->name("contactanos.store");


Route::resource("cursos", CursoController::class);

// Route::get("/contactanos", function () {
//     Mail::to("alexanderovelar4@gmail.com")->send(new ContactanosMailble);
//     return "mensaje enviado";
// })->name("Contactanos");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
