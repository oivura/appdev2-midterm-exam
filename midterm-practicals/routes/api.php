<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\ProductAccessMiddleware;

Route::apiResource('products', ProductController::class);


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//===

// GET route
Route::get('/get', function () {
	return response()->json(['message' => 'GET request handled. ']);
	})->middleware(ProductAccessMiddleware::class);


// POST route
Route::post('/post', function () {
	return response()->json(['message' => 'POST request handled. ']);
	})->middleware(ProductAccessMiddleware::class);


// PUT route
Route::put('/put}', function () {
	return response()->json(['message' => 'PUT request handled. ']);
})->middleware(ProductAccessMiddleware::class);


// PATCH route
Route::patch('/patch}', function () {
	return response()->json(['message' => 'PATCH request handled. ']);
	})->middleware(ProductAccessMiddleware::class);


// DELETE route
Route::delete('/delete', function () {
	return response()->json(['message' => 'DELETE request handled. ']);
})->middleware(ProductAccessMiddleware::class);




//---

// GET route
Route::get('/upload.local', function () {
	return 'Image successfully stored in local disk driver!';
});

// GET route
Route::get('/upload.public', function () {
	return ':Image successfully stored in a public disk driver!';
});

/*
// POST route
Route::post('/create', function () {
	return 'New resource created!';
});

// PUT route
Route::put('/update/{id}', function ($id) {
	return "Resource with ID $id updated!";
});

// PATCH route
Route::patch('/modify/{id}', function ($id) {
	return "Resource with ID $id modified!";
});

// DELETE route
Route::delete('/delete/{id}', function ($id) {
	return "Resource with ID $id deleted!";
});
*/

