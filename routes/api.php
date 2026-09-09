<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Back end aktif',
        'time' => now()->toIso8601String(),
    ]);
});

Route::get('/info', function () {
    return response()->json([
        'team' => 'Rosemary',
        'members' => 2,
        'php_version' => PHP_VERSION,
    ]);
});

Route::get('/profil-zee', function () {
    return response()->json([
        'nama' => 'Nimatul Azizah',
        'peran' => 'Back End Developer',
    ]);
});