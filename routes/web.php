<?php



use App\Models\Boy;
use App\Models\Teacher;
use App\Models\Registration;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
    return view('welcome');
});


*/

Route::resource('/departments',DepartmentController::class)->except(['edit','update']);
Route::resource('/courses',CourseController::class)->except(['edit','update']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/generate/{id}', [App\Http\Controllers\RegistrationController::class, 'generate']);

Route::resource('/registration',RegistrationController::class);

Route::resource('/student',BoyController::class);
Route::resource('/teacher',TeacherControlle::class);

