<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\IssueController,
    App\Http\Controllers\TodoController;

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

Route::get('/todo/', [TodoController::class, 'index']);

Route::get('/issue/all', [IssueController::class, 'getAll']);


Route::post('/issue/add/', [IssueController::class, 'storage']);

Route::get('/files', function () {
    return 'File Manager App';
});

Route::get('/search', function () {
    return 'Search App';
});