<?php

use Illuminate\Http\Request;

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

Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');
Route::post('/password/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
Route::post('/password/reset', 'Api\ResetPasswordController@reset');
Route::get('/email/resend', 'Api\Verification@resend')->name('verification.resend');
Route::get('/email/verify/{id}/{hash}', 'Api\Verification@verify')->name('verification.verify');
Route::post('/commitment', 'Api\CommitmentController@store');
Route::get('/commitment/{id}', 'Api\CommitmentController@show');
Route::get('/commitment/one/{id}', 'Api\CommitmentController@showone');


