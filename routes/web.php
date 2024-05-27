<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudControllerr;

route::get('/article', [CrudControllerr::class,'liste_article']);
route::get('/ajouter', [CrudControllerr::class,'ajouter_article']);
route::post('/ajouter/traitement', [CrudControllerr::class,'ajouter_article_traitement']);
Route::get('/article/{id}', [CrudControllerr::class, 'voir_article'])->name('voir_article');
