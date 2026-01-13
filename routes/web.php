<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Route paling aman untuk testing Laravel di Vercel
| JANGAN pakai auth dulu
*/

Route::get('/', function () {
    return response()->json([
        'status' => 'OK',
        'message' => 'Laravel berhasil jalan di Vercel 🚀',
        'php_version' => PHP_VERSION,
        'env' => app()->environment()
    ]);
});

/*
|--------------------------------------------------------------------------
| Route tambahan (opsional)
|--------------------------------------------------------------------------
*/

Route::get('/test', function () {
    return 'Test route OK';
});
