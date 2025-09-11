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


Route::get('/', 'IndexController@index');
Route::get('/harmonizacao-facial', 'ProcedimentosController@harmonizacaoFacial')->name('harmonizacaoFacial');
Route::get('/preenchimento-labial', 'ProcedimentosController@preenchimentoLabial')->name('preenchimentoLabial');
Route::get('/botox', 'ProcedimentosController@botox')->name('botox');
Route::get('/fios-sustentacao', 'ProcedimentosController@fiosSustentacao')->name('fiosSustentacao');
Route::get('/ultraformer', 'ProcedimentosController@ultraformer')->name('ultraformer');
Route::get('/catalogo', 'IndexController@catalogo')->name('catalogo');