<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*laraver入門問題
Route::get('/building/{room?}', [TestController::class, 'index']);
*/


Route::prefix('book')->group(function () {//以下を追記
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});
Route::get('/relation', [AuthorController::class, 'relate']);
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

/*Routes問題１
Route::get('/test/{room}/{id}', function($room,$id) {
    return 'roomが'.$room .'でidは'.$id.'です';
});

//Routes問題２
Route::get('/test/{Bonjour?}',function($Bonjour='Goodmorning'){
    return $Bonjour.'=おはようございます';
});
*/