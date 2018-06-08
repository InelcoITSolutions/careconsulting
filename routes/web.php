<?php
//inicio
Route::get('/', function () {
    return view('index');
});

//demas paginas del sitio de de care
Route::get('drics1', function () {
    return view('templates.drics1');
});
Route::get('drics2', function () {
    return view('templates.drics2');
});
