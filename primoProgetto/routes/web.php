<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Sito';
    return view('welcome', ['titolo' => $title]);  //passaggio di dati alla vista
});

Route::get('/chi-siamo', function () {
    $arraystudents = [
        ['name' => 'Leo', 'surname' => 'Napoli'],
        ['name' => 'armando', 'surname' => 'di santo'],
        ['name' => 'antonio', 'surname' => 'rossi'],
        ['name' => 'samuel', 'surname' => 'tozzi'],
    ];
    return view('chiSiamo', ['students' => $arraystudents]);
});
