<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Models\Enquiry;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
--------------------------------
Route::get('/greeting', function () {
    return 'Hello World';
});

---------------------------
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function() {
    //
});

Route::post('/enquiry', function(Request $request) {

});

Route::delete('/enquiry/{enquiry}', function(Enquiry $enquiry){

});

