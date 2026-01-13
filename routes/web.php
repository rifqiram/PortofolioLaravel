Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Laravel live on Vercel!'
    ]);
});
