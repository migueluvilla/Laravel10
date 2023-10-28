<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use GuzzleHttp\Promise\Create;




//con datos dinámicos | con id? signo de interrogación estoy diciendo que es un parametro opcional
Route::get('/',                       [NoteController::class, 'home'])  ->name('note.home');

//con datos dinámicos | con id? signo de interrogación estoy diciendo que es un parametro opcional
Route::get('/note',                   [NoteController::class, 'index'])  ->name('note.index');

//Creando una ruta para mostrar el formulario donde se ingresará una nueva nota en la vista "note.create.blade.php"
Route::get('/note/create',            [NoteController::class, 'create']) ->name('note.create');

//al recibir desde un formulario para que los datos viajen encriptados
//se usa post
Route::post('/note/store',            [NoteController::class, 'store'])  ->name('note.store');

//ruta de edición (para mostrar el formulario donde se editarán los valores pero no impacta en BD)
Route::get('/note/edit/{note}',       [NoteController::class, 'edit'])   ->name('note.edit');

//ruta PUT - para Guardar los datos del edit en la BD
Route::put('/note/update/{note}',     [NoteController::class, 'update']) ->name('note.update');

//ruta SHOW para mostrar los datos (SELECT)
Route::get('/note/show/{note}',       [NoteController::class, 'show'])   ->name('note.show');

//ruta para eliminar las notas por id
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');




//Resource crea todas las rutas de manera automática
// Route::resource('/note', NoteController::class);



