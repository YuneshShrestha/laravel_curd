<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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
    // sapp data leko student model bata
    $students = Student::all();
    // sapp data compact garaera pass gareko
    return view('student.index', compact('students'));
});
// sapp link banauxa student agadi name bhako
Route::resource('student',StudentController::class);