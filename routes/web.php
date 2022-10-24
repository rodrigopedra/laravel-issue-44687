<?php

use App\Http\Controllers\TestController;
use App\Rules\TestRule;
use Illuminate\Support\Facades\Route;

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

Route::post('/', function () {
    request()->merge(['a' => 'c']);

    return request()->all();
});

Route::post('/validate', function () {
    request()->validate([
        'a' => new TestRule(request()),
    ]);

    return request()->all();
});

Route::post('with-controller', [TestController::class, 'test']);
