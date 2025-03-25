<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\principalController::class,'principal'])->name('site.principal');
Route::get('/contato',[\App\Http\Controllers\contatoController::class,'contato'])->name('site.contato');
Route::get('/sobre-nos',[\App\Http\Controllers\sobrenosController::class,'sobreNos'])->name('site.sobre-nos');
