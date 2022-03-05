<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::group(["namespace" => "API"],function() {

//     Route::post("/smallest-positive-value",[SmallestPositiveElementController::class,''])

// });


Route::group(['middleware' => []], fn ( ) : array => [
        Route::name('smallest-positive-value.')->prefix('/smallest-positive-value')->group( fn ( ) : array => [
            Route::post('',   'SmallestPositiveElementController@store'      )->name('store'),
        ]),
        Route::name('start-end-count.')->prefix('/start-end-count')->group( fn ( ) : array => [
            Route::get('',   'StartEndCountController@all'      )->name('all'),
        ]),
        Route::name('unique.')->prefix('/unique')->group( fn ( ) : array => [
            Route::post('',   'UniqueController@store'      )->name('store'),
        ]),
        Route::name('alphapitical.')->prefix('/alphapitical')->group( fn ( ) : array => [
            Route::get('',   'AlphapiticalController@all'      )->name('all'),
        ]),
]);




