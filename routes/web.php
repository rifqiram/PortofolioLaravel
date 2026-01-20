<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
| /        -> UI (Blade)
| /health  -> Health check (JSON)
|--------------------------------------------------------------------------
*/

// UI PORTFOLIO (LOCALHOST & PROD)
Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

// Health check (AMAN UNTUK VERCEL)
Route::get('/health', function () {
    return response()->json([
        'status'      => 'OK',
        'message'     => 'Laravel API aktif 🚀',
        'php_version' => PHP_VERSION,
        'env'         => app()->environment(),
    ]);
});

// Test route
Route::get('/test', function () {
    return 'Test route OK';
});
