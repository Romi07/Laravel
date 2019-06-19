<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
  return 'Hola soy el Formulario';
});

Route::get('/miPrimerRuta', function () {
  return "Creé mi primer ruta en Laravel";
});

Route::get('/resultado/{numero}', function($numero) {
  if($numero % 2 == 0) {
    return 'par';
  } else {
    return 'impar';
  }
});

Route::get('/resultadodos/{numero}/{numerouno?}', function($numero, $numerouno = null) {
  if($numerouno) {
    return $numero * $numerouno;
  } else {
    if($numero % 2 == 0) {
      return 'par';
    } else {
      return 'impar';
    }
  }
});
