<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/members', function () {return view('members');})->name('members');


Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
Route::get('/apply',[App\Http\Controllers\BlogsController::class, 'apply'])->name('apply');
Route::get('/blog', function () {return view('blog',
          ['posts'=>App\Models\Blog::latest()->get(),
          'categories'=>App\Models\Category::latest()->get()]);})
          ->name('blog');
Route::get('/notice', function () {return view('notice',
    ['notices'=>App\Models\Notice::latest()->get()]);})->name('notice');

   

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

Route::get('/askrooms',[App\Http\Controllers\AskroomController::class, 'index'])->name('askrooms.index');
Route::get('/askrooms/create',[App\Http\Controllers\AskroomController::class, 'create'])->name('askrooms.create');
Route::post('/askrooms/store',[App\Http\Controllers\AskroomController::class, 'store'])->name('askrooms.store');
Route::get('/askrooms/{askroom}',[App\Http\Controllers\AskroomController::class, 'destroy'])->name('askrooms.delete');

Route::get('/leaverooms',[App\Http\Controllers\LeaveroomController::class, 'index'])->name('leaverooms.index');
Route::get('/leaverooms/create',[App\Http\Controllers\LeaveroomController::class, 'create'])->name('leaverooms.create');
Route::post('/leaverooms/store',[App\Http\Controllers\LeaveroomController::class, 'store'])->name('leaverooms.store');
Route::get('/leaverooms/{leaveroom}',[App\Http\Controllers\LeaveroomController::class, 'destroy'])->name('leaverooms.delete');

Route::get('/notices',[App\Http\Controllers\NoticeController::class, 'index'])->name('notices.index');
Route::get('/notices/create',[App\Http\Controllers\NoticeController::class, 'create'])->name('notices.create');
Route::post('/notices/store',[App\Http\Controllers\NoticeController::class, 'store'])->name('notices.store');
Route::post('/notices/update/{id}',[App\Http\Controllers\NoticeController::class, 'update'])->name('notices.update');
Route::post('/notices/{notice}',[App\Http\Controllers\NoticeController::class, 'show'])->name('notices.show');
Route::get('/notices/{notice}/edit',[App\Http\Controllers\NoticeController::class, 'edit'])->name('notices.edit');
Route::get('/notices/delete/{id}',[App\Http\Controllers\NoticeController::class, 'destroy'])->name('notices.delete');

Route::get('/blogs/{slug}',[App\Http\Controllers\BlogsController::class, 'singlePost'])->name('posts.single');
Route::get('/category/{id}',[App\Http\Controllers\BlogsController::class, 'category'])->name('category.single');
Route::get('/notices/{slug}',[App\Http\Controllers\NoticeController::class, 'singleNotice'])->name('notices.single');


Route::get('/users',[App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::get('/users/create',[App\Http\Controllers\UsersController::class, 'create'])->name('users.create');
Route::post('/users/store',[App\Http\Controllers\UsersController::class, 'store'])->name('users.store');
Route::get('/users/admin/{id}',[App\Http\Controllers\UsersController::class, 'admin'])->name('users.admin');
Route::get('/users/not-admin/{id}',[App\Http\Controllers\UsersController::class, 'not_admin'])->name('users.not.admin');
Route::get('/users/delete/{id}',[App\Http\Controllers\UsersController::class, 'delete'])->name('users.delete');

});
