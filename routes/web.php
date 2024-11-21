<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'homepage'])->name ('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index'); 

Route::get('/article/show/{articolo}', [ArticleController::class, 'show'])->name('articolo.show');

Route::get('/article/category/{category)', [ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::get('/redattore/{user}', [ArticleController::class, 'filterByUser'])->name('article.user');

Route::get('/careers', [PublicController::class, 'careers'])->name('careers');
