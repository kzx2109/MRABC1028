<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DiaryController;

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
Route::get('/members',[MemberController::class,'getAllmembers']);
Route::post('/getmemberid',[MemberController::class,'getmemberId']);
Route::post('/getmemberdata',[MemberController::class,'getmemberData']);
// Route::post('/updatememberdata',[MemberController::class,'updatememberData']);
Route::post('/updatemail',[MemberController::class,'updateEmail']);
Route::post('/updategender',[MemberController::class,'updateGender']);
Route::post('/updatepassword',[MemberController::class,'updatePassword']);
Route::post('/getmemberpassword',[MemberController::class,'getmemberPassword']);
Route::post('/getdiary',[DiaryController::class,'getDiary']);
Route::post('/getfeedback',[DiaryController::class,'getFeedback']);
Route::post('/getstar',[DiaryController::class,'getStar']);
Route::post('/updatefeedback',[DiaryController::class,'updateFeedback']);
Route::get('/getdiarydata',[DiaryController::class,'getdiaryData']);
Route::post('/insertmember',[MemberController::class,'insertMember']);

