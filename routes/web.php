<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;

use App\Models\Category;
use App\Models\User;
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

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        'field' => 'categories'
    ]);
});

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);


Route::get('/categories/{category:slug}', function(Category $category){
    return view('article', [
        'title' => "Posts by Category: $category->name",
        'articles' => $category->articles->load('category', 'author'),
        'category' => $category->name
    ]);
});

Route::get('/authors', function(){
    return view('authors', [
        'title' => 'Post Authors',
        'authors' => User::has('articles')->get(),
        // 'authors' => User::all(),
        'field' => 'authors'
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('article', [
        'title' => "Posts by Author: $author->name",
        'articles' => $author->articles->load('category', 'author'),
    ]);
});

Route::get("/view", function () {
    return "Warga Laravel.";
})->name("view");

Route::middleware('date')->prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
});


Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest'); 


Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);




