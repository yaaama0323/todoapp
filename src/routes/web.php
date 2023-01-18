<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;
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




Route::group(['middleware' => 'auth'], function() {
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified'])->name('todos');
Auth::routes();


Route::get('/folders/{id}/tasks', [TaskController::class,'index'])->name('tasks.index');
Route::get('/folders/create', [FolderController::class,'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [FolderController::class,'create']);

Route::get('/folders/{id}/tasks/create', [TaskController::class,'showCreateForm'])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);

Route::get('/folders/{id}/tasks/{task_id}/edit', [TaskController::class,'showEditForm'])->name('tasks.edit');

Route::post('/folders/{id}/tasks/{task_id}/edit', [TaskController::class,'edit']);


Route::group(['middleware' => 'auth'], function() {
});
});

Auth::routes();
