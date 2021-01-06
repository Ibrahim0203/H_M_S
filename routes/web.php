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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
Route::get('/apply',[App\Http\Controllers\BlogsController::class, 'apply'])->name('apply');
Route::get('/blog', function () {return view('blog',
          ['posts'=>App\Models\Blog::latest()->get(),
          'categories'=>App\Models\Category::latest()->get()]);})
          ->name('blog');

Route::post('/send-message',[App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');
    
Route::get('/blogs',[App\Http\Controllers\BlogsController::class, 'index'])->name('posts.index');
Route::get('/blogs/create',[App\Http\Controllers\BlogsController::class, 'create'])->name('posts.create');
Route::post('/blogs/store',[App\Http\Controllers\BlogsController::class, 'store'])->name('posts.store');
Route::post('/blogs/update/{id}',[App\Http\Controllers\BlogsController::class, 'update'])->name('posts.update');
Route::post('/blogs/{blog}',[App\Http\Controllers\BlogsController::class, 'show'])->name('posts.show');
Route::get('/blogs/{blog}/edit',[App\Http\Controllers\BlogsController::class, 'edit'])->name('posts.edit');
Route::get('/blogs/delete/{id}',[App\Http\Controllers\BlogsController::class, 'destroy'])->name('posts.delete');

Route::get('/categories',[App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/create',[App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories/store',[App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
Route::post('/categories/update/{id}',[App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
Route::post('/categories/{category}',[App\Http\Controllers\CategoriesController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit',[App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
Route::get('/categories/{category}',[App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.delete');

Route::get('/buildings',[App\Http\Controllers\BuildingController::class, 'index'])->name('buildings.index');
Route::get('/buildings/create',[App\Http\Controllers\BuildingController::class, 'create'])->name('buildings.create');
Route::post('/buildings/store',[App\Http\Controllers\BuildingController::class, 'store'])->name('buildings.store');
Route::post('/buildings/update/{id}',[App\Http\Controllers\BuildingController::class, 'update'])->name('buildings.update');
Route::post('/buildings/{building}',[App\Http\Controllers\BuildingController::class, 'show'])->name('buildings.show');
Route::get('/buildings/{building}/edit',[App\Http\Controllers\BuildingController::class, 'edit'])->name('buildings.edit');
Route::get('/buildings/{building}',[App\Http\Controllers\BuildingController::class, 'destroy'])->name('buildings.delete');

Route::get('/floors',[App\Http\Controllers\FloorController::class, 'index'])->name('floors.index');
Route::get('/floors/create',[App\Http\Controllers\FloorController::class, 'create'])->name('floors.create');
Route::post('/floors/store',[App\Http\Controllers\FloorController::class, 'store'])->name('floors.store');
Route::post('/floors/update/{id}',[App\Http\Controllers\FloorController::class, 'update'])->name('floors.update');
Route::post('/floors/{floor}',[App\Http\Controllers\FloorController::class, 'show'])->name('floors.show');
Route::get('/floors/{floor}/edit',[App\Http\Controllers\FloorController::class, 'edit'])->name('floors.edit');
Route::get('/floors/{floor}',[App\Http\Controllers\FloorController::class, 'destroy'])->name('floors.delete');

Route::get('/allocations',[App\Http\Controllers\AllocationController::class, 'index'])->name('allocations.index');
Route::get('/allocations/create',[App\Http\Controllers\AllocationController::class, 'create'])->name('allocations.create');
Route::post('/allocations/store',[App\Http\Controllers\AllocationController::class, 'store'])->name('allocations.store');
Route::post('/allocations/update/{id}',[App\Http\Controllers\AllocationController::class, 'update'])->name('allocations.update');
Route::post('/allocations/{allocation}',[App\Http\Controllers\AllocationController::class, 'show'])->name('allocations.show');
Route::get('/allocations/{allocation}/edit',[App\Http\Controllers\AllocationController::class, 'edit'])->name('allocations.edit');
Route::get('/allocations/vacant/{id}',[App\Http\Controllers\AllocationController::class, 'destroy'])->name('allocations.vacant');
Route::get('/allocations/vacantindex',[App\Http\Controllers\AllocationController::class, 'vacantindex'])->name('allocations.vacantindex');
Route::get('/allocations/kill/{id}',[App\Http\Controllers\AllocationController::class, 'kill'])->name('allocations.kill');
Route::get('/allocations/{allocation}',[App\Http\Controllers\AllocationController::class, 'allocate'])->name('allocations.allocate');

Route::get('/blogs/{slug}',[App\Http\Controllers\BlogsController::class, 'singlePost'])->name('posts.single');
Route::get('/category/{id}',[App\Http\Controllers\BlogsController::class, 'category'])->name('category.single');

Route::get('/askrooms',[App\Http\Controllers\AskroomController::class, 'index'])->name('askrooms.index');
Route::get('/askrooms/create',[App\Http\Controllers\AskroomController::class, 'create'])->name('askrooms.create');
Route::post('/askrooms/store',[App\Http\Controllers\AskroomController::class, 'store'])->name('askrooms.store');
Route::get('/askrooms/{askroom}',[App\Http\Controllers\AskroomController::class, 'destroy'])->name('askrooms.delete');

Route::get('/leaverooms',[App\Http\Controllers\LeaveroomController::class, 'index'])->name('leaverooms.index');
Route::get('/leaverooms/create',[App\Http\Controllers\LeaveroomController::class, 'create'])->name('leaverooms.create');
Route::post('/leaverooms/store',[App\Http\Controllers\LeaveroomController::class, 'store'])->name('leaverooms.store');
Route::get('/leaverooms/{leaveroom}',[App\Http\Controllers\LeaveroomController::class, 'destroy'])->name('leaverooms.delete');
});
