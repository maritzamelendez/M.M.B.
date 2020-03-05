<?php

use Illuminate\Support\Facades\Route;

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

Route::get('inicio', function(){
	return view('inicio');
})->name('inicio');

Route::get('quiensy', function(){
	return view('quiensy');
})->name('quiensy');

Route::get('arbol', function(){
	$name = ['Abuelo paterno: Ángel', 'Abuela paterna: Martina', 'Abuelo materno: Marino', 'Abuela materna: Esther', 'Papá: Victor', 'Mamá: Florentina', 'Hermano: David', 'Hermana mayor: Flor', 'Hermana menor: Julissa', 'Yo: Maritza'];
	return view('arbol', compact('name'));
})->name('arbol');

Route::get('hobbies', function(){
	return view('hobbies');
})->name('hobbies');

Route::get('experiencia', function(){
	return view('experiencia');
})->name('experiencia');

Route::get('contactame', function(){
	return view('contactame');
})->name('contactame');


