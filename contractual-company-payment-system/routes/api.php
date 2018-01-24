<?php

use Illuminate\Http\Request;
use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function () {
     $users=User::all();
     return response()->json($users);

Route::post('stuff_duty/store','StuffDutyController@create_stuff_duty');
});



Route::post('stuff_duty/store','StuffDutyController@create_stuff_duty');
Route::get('/getuser/{id}','StuffDutyController@getuser');