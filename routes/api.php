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


Route::post('/api/CheckApi', 'Actions\ApiRequest\CheckApi');
Route::resource('/api/RestApi', 'Actions\ApiRequest\RestApi');
Route::post('/api/StartAutoFavoriteBySnsAccount', 'Actions\AutoFunction\AutoFavortite\StartAutoFavoriteBySnsAccount');
Route::post('/api/StopAutFavoritBySnsAccount', 'Actions\AutoFunction\AutoFavortite\StopAutFavoritBySnsAccount');
Route::post('/api/StartAutoFollowBySnsAccount', 'Actions\AutoFunction\AutoFollow\StartAutoFollowBySnsAccount');
Route::post('/api/StopAutoFollowBySnsAccount', 'Actions\AutoFunction\AutoFollow\StopAutoFollowBySnsAccount');
Route::post('/api/StartAutoUnfollowByAnsAccount', 'Actions\AutoFunction\AutoFollow\StartAutoUnfollowByAnsAccount');
Route::post('/api/StopAutoUnfollowBySnsAccount', 'Actions\AutoFunction\AutoFollow\StopAutoUnfollowBySnsAccount');
Route::post('/api/StartAutoTweetBySnsAccount', 'Actions\AutoFunction\AutoTweet\StartAutoTweetBySnsAccount');
Route::post('/api/StopAutoTweetBySnsAccount', 'Actions\AutoFunction\AutoTweet\StopAutoTweetBySnsAccount');
Route::resource('/api/RestKeyPattern', 'Actions\KeyPattern\RestKeyPattern');
Route::post('/api/ChooseKeyPatternForFavorite', 'Actions\KeyPattern\ChooseKeyPatternForFavorite');
Route::post('/api/ChooseKeyPatternForFollow', 'Actions\KeyPattern\ChooseKeyPatternForFollow');
Route::post('/api/removeKeyPatternForFavorite', 'Actions\KeyPattern\removeKeyPatternForFavorite');
Route::post('/api/RemoveKeyPatternForFollow', 'Actions\KeyPattern\RemoveKeyPatternForFollow');
Route::resource('/api/RestSnsAccount', 'Actions\SnsAccount\RestSnsAccount');
Route::resource('/api/RestTargetAccounts', 'Actions\TargetAccount\RestTargetAccounts');
Route::resource('/api/RestTweet', 'Actions\Tweet\RestTweet');
Route::resource('/api/RestTweetTemplate', 'Actions\Tweet\RestTweetTemplate');

});
