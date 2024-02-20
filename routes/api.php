<?php

use App\Http\Controllers\HeadController;
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
//Route::group(['middleware' => ['auth:sanctum']], function () {

Route::get('GetAllGallery', [HeadController::class, 'Gallery']);
Route::get('GetAbout', [HeadController::class, 'About']);
Route::get('GetAllServices', [HeadController::class, 'Services']);
Route::get('GetAllPartners', [HeadController::class, 'Partners']);
Route::get('GetAllContact', [HeadController::class, 'Contact']);
Route::post('AddContact', [HeadController::class, 'AddContact']);
Route::get('GetAllSocailMedia', [HeadController::class, 'SocailMedia']);
Route::get('GetContents', [HeadController::class, 'contents']);
Route::get('getmportantLink', [HeadController::class, 'iportLink']);

//});
