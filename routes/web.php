<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;

/* 
Es una ruta para el metodo inicio 

Ruta, recupera inf, ruta que responde al URL, Cuando un usuario accede a la URL raíz, Laravel llamará al método
  |     |   |---------|                             |  
  |     |   |               |-----------------------|
                            |                           
                            |                       Establece el nombre de la ruta
                            |                                |        |                     */
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');


Route::get('/formulario', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');


Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos'); 


Route::post('/guardarRecuerdo', [diarioController::class, 'metodoGuardar'])->name('guardar');
























// Rutas agrupadas tipo controlador 

/*Route::controller(diarioController::class)->group(function (){

    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/formulario','metodoFormulario')->name('apodoInicio');
    Route::get('/recuerdos','metodoRecuerdos')->name('apodoRecuerdos');

    // la ruta 4 tiene que ser post
    Route::post('/guardarRecuerdo',diarioController::class,'metodoGuardar')->name('guardar');

    
    
}); */







