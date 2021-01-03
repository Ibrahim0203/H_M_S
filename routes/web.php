<?php

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

Route::get('/u_login', function () {
    return view('layouts.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

Route::get('/apply',[App\Http\Controllers\BlogsController::class, 'apply'])->name('apply');
Route::get('/blog', function () {return view('blog',
    ['posts'=>App\Models\Blog::latest()->get(),
    'categories'=>App\Models\Category::latest()->get()]);})->name('blog');
Route::post('/send-message',[App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');


    
Route::get('/posts',[App\Http\Controllers\BlogsController::class, 'index'])->name('posts.index');
Route::get('/posts/create',[App\Http\Controllers\BlogsController::class, 'create'])->name('posts.create');
Route::post('/posts/store',[App\Http\Controllers\BlogsController::class, 'store'])->name('posts.store');
Route::post('/posts/update/{id}',[App\Http\Controllers\BlogsController::class, 'update'])->name('posts.update');
Route::post('/posts/{post}',[App\Http\Controllers\BlogsController::class, 'show'])->name('posts.show');
Route::get('/posts/{posts}/edit',[App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
Route::get('/posts/delete/{id}',[App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.delete');
Route::get('/posts/trashed',[App\Http\Controllers\PostsController::class, 'trashed'])->name('posts.trashed');
Route::get('/posts/kill/{id}',[App\Http\Controllers\PostsController::class, 'kill'])->name('posts.kill');
Route::get('/posts/{post}',[App\Http\Controllers\PostsController::class, 'restore'])->name('posts.restore');
    
    
    
Route::get('/categories',[App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/create',[App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories/store',[App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
Route::post('/categories/update/{id}',[App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
Route::post('/categories/{category}',[App\Http\Controllers\CategoriesController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit',[App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
Route::get('/categories/{category}',[App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.delete');
});
