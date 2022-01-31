<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::middleware('auth_api')->get('/get_companies', [ApiController::class, 'getCompanies']);
 Route::get('/get_clients/{id}', [ApiController::class, 'getClients'])->middleware('auth:api');
 Route::get('/get_clients_companies/{id}', [ApiController::class, 'getClientCompanies'])->middleware('auth:api');