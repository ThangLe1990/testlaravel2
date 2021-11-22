<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\MailDemoController;
use App\Http\Controllers\CheckAgeController;


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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get( 'posts/add', [App\Http\Controllers\PostController::class, 'add'] );

Route::get( 'posts/show', [App\Http\Controllers\PostController::class, 'show'] );

Route::get( 'posts/read', [App\Http\Controllers\PostController::class, 'read'] );

Route::get( 'posts/add', [PostController::class, 'add']);

Route::post( 'posts/store', [PostController::class, 'store']);
 

Route::get('users/reg', function(){
  return view ('users/register');
});

Route::get( 'helper/url', [HelperController::class, 'url']) -> name('helper.url');
Route::get( 'helper/string', [HelperController::class, 'string']) -> name('helper.string');

Route::get( 'session/add', [SessionController::class, 'add']);
Route::get( 'session/show', [SessionController::class, 'show']);
Route::get( 'session/add_flash', [SessionController::class, 'add_flash']);

Route::get( 'cookie/set', [CookieController::class, 'set']);
Route::get( 'cookie/get', [CookieController::class, 'get']);

Route::get( 'demo/sendmail', [MailDemoController::class, 'sendmail']);

// Route::get( 'admin/{age}', function() {
//   return view ('admin.checkage');
// }) -> middleware('checkage');

Route::get( 'admin/{age}', [CheckAgeController::class, 'index']);