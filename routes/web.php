<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudControllerr;

route::get('/article', [CrudControllerr::class,'liste_article']);
