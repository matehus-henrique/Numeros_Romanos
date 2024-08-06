<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanController;


Route::get('/', function () {
    return view('welcome');
});

// Rota para exibir o formulário de conversão de número para romano
Route::get('/converter-para-romano', [RomanController::class, 'showConvertToRoman'])->name('converter_para_romano');

// Rota para exibir o formulário de conversão de romano para número
Route::get('/converter-de-romano', [RomanController::class, 'showConvertFromRoman'])->name('converter_de_romano');

// Rota para processar a conversão de número para romano
Route::post('/converter-para-romano', [RomanController::class, 'convertToRoman']);

// Rota para processar a conversão de romano para número
Route::post('/converter-de-romano', [RomanController::class, 'convertFromRoman']);