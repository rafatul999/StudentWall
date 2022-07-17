<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\CalenderController;
use App\Http\Controllers\Admin\StudentController;
//use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ClassController;

use App\Http\Controllers\Blog\BlogController;





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



Route::get('croom',[App\Http\Controllers\CroomController::class,'index']);
Route::get('contact',[App\Http\Controllers\CroomController::class,'contact']);

Route::get('todos',[App\Http\Controllers\TodosController::class,'todo']);
Route::get('create',[App\Http\Controllers\TodosController::class,'create']);
Route::post('store-todo',[App\Http\Controllers\TodosController::class,'store']);
Route::get('todos/{todo}',[App\Http\Controllers\TodosController::class,'show']);
Route::get('todos/{todo}/edit',[App\Http\Controllers\TodosController::class,'edit']);
Route::post('todos/{todo}/update-todo',[App\Http\Controllers\TodosController::class,'update']);
Route::get('todos/{todo}/delete',[App\Http\Controllers\TodosController::class,'destory']);
Route::get('todos/{todo}/complete',[App\Http\Controllers\TodosController::class,'complete']);

Route::get('library',[App\Http\Controllers\LibraryController::class,'index']);
Route::get('library.library',[App\Http\Controllers\LibraryController::class,'library']);
Route::get('library/{library}',[App\Http\Controllers\LibraryController::class,'show']);

Route::get('students',[App\Http\Controllers\StudentController::class,'index']);
//Route::get('teachers',[App\Http\Controllers\TeacherController::class,'index']);

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('welcome');

Auth::routes();

// Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
//     Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
//      Route::resource('about',AboutController::class);
//      Route::resource('category',CategoryController::class);
//      Route::resource('library',LibraryController::class);
//      Route::resource('calender',CalenderController::class);
//      Route::resource('student',StudentController::class);
//      Route::resource('teacher',TeacherController::class);
//      Route::resource('class',ClassController::class);
// });

Route::prefix('admin')->name('admin.')->group(function(){
Route::middleware(['guest:admin'])->group(function(){
Route::view('/login','admin.login')->name('login');
Route::post('/check',[AdminController::class,'check'])->name('check');
});
Route::middleware(['auth:admin'])->group(function(){
Route::view('/home','admin.dashboard')->name('dashboard');
Route::post('/logout',[AdminController::class,'logout'])->name('logout');
});
 Route::resource('about',AboutController::class);
     Route::resource('category',CategoryController::class);
     Route::resource('library',LibraryController::class);
     Route::resource('calender',CalenderController::class);
     Route::resource('student',StudentController::class);
     Route::resource('teacher',TeacherController::class);
     Route::resource('class',ClassController::class);
});

Route::prefix('teacher')->name('teacher.')->group(function(){
Route::middleware(['guest:teacher'])->group(function(){
Route::view('/login','teacher.login')->name('login');
Route::view('/register','teacher.register')->name('register');
Route::post('/create',[TeacherController::class,'create'])->name('create');
Route::post('/check',[TeacherController::class,'check'])->name('check');
});
Route::middleware(['auth:teacher'])->group(function(){
Route::view('/home','teacher.dashboard')->name('dashboard');
Route::post('logout',[TeacherController::class,'logout'])->name('logout');
});

});

Route::prefix('user')->name('user.')->group(function(){
Route::middleware(['guest:web'])->group(function(){
Route::view('/login','user.login')->name('login');
Route::view('/register','user.register')->name('register');
Route::post('/create',[UserController::class,'create'])->name('create');
Route::post('/check',[UserController::class,'check'])->name('check');
});
Route::middleware(['auth:web'])->group(function(){
Route::view('/home','user.home')->name('home');
Route::post('/logout',[UserController::class,'logout'])->name('logout');

});

});