<?php

Route::get('/', function () {
    return view('welcome');
});

Route::GET('/users', function () {
    return 'Usuarios';
});

Route::get('/users/{id}', function ($id) {
    return "Usuario: {$id}";
});
