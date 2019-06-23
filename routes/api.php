<?php

use Illuminate\Http\Request;
use App\CasteCrews;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/users', 'UserController');

Route::resource('/members', 'MemberController');

Route::resource('/member_type', 'MemberTypeController');

Route::resource('/movies', 'MovieController');

Route::resource('/castcrew', 'CasteCrewController');


