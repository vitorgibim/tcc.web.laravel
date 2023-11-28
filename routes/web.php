<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index'])->name('site.index');

Route::get('/login/{erro?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');


Route::middleware('autenticacao:padrao,visitante,p3')->prefix('/app')->group(function() {
    
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])->name('app.sair');
    
    //Students
    Route::get('/students/list', [\App\Http\Controllers\StudentController::class, 'list'])->name('app.student.list');
    Route::get('/students/edit/{id}', [\App\Http\Controllers\StudentController::class, 'edit'])->name('app.student.edit');
    Route::put('/students/update', [\App\Http\Controllers\StudentController::class, 'update'])->name('app.student.update');
    Route::get('/students/delete/{id}', [\App\Http\Controllers\StudentController::class, 'delete'])->name('app.student.delete');
    Route::post('/students/add', [\App\Http\Controllers\StudentController::class, 'add'])->name('app.student.add');
    Route::get('/students/add', [\App\Http\Controllers\StudentController::class, 'addForm'])->name('app.student.add');
    
    
    // Route::get('/students/add', function () {
    //     return view('app.student.add');
    // });

    //Teachers
    Route::get('/teachers/list', [\App\Http\Controllers\TeacherController::class, 'list'])->name('app.teacher.list');
    Route::get('/teachers/edit/{id}', [\App\Http\Controllers\TeacherController::class, 'edit'])->name('app.teacher.edit');
    Route::put('/teachers/update', [\App\Http\Controllers\TeacherController::class, 'update'])->name('app.teacher.update');
    Route::get('/teachers/delete/{id}', [\App\Http\Controllers\TeacherController::class, 'delete'])->name('app.teacher.delete');
    Route::post('/teachers/add', [\App\Http\Controllers\TeacherController::class, 'add'])->name('app.teacher.add');
    Route::get('/teachers/add', [\App\Http\Controllers\TeacherController::class, 'addForm'])->name('app.teacher.add');
    
    // Route::get('/teachers/add', function () {
    //     return view('app.teacher.add');
    // });

    //Beacons
    Route::get('/beacon/list', [\App\Http\Controllers\BeaconController::class, 'list'])->name('app.beacon.list');
    Route::get('/beacon/edit/{id}', [\App\Http\Controllers\BeaconController::class, 'edit'])->name('app.beacon.edit');
    Route::put('/beacon/update', [\App\Http\Controllers\BeaconController::class, 'update'])->name('app.beacon.update');
    Route::get('/beacon/delete/{id}', [\App\Http\Controllers\BeaconController::class, 'delete'])->name('app.beacon.delete');
    Route::post('/beacon/add', [\App\Http\Controllers\BeaconController::class, 'add'])->name('app.beacon.add');
    Route::get('/beacon/add', [\App\Http\Controllers\BeaconController::class, 'addForm'])->name('app.beacon.add');

    //Courses
    Route::get('/course/list', [\App\Http\Controllers\CourseController::class, 'list'])->name('app.course.list');
    Route::get('/course/edit/{id}', [\App\Http\Controllers\CourseController::class, 'edit'])->name('app.course.edit');
    Route::put('/course/update', [\App\Http\Controllers\CourseController::class, 'update'])->name('app.course.update');
    Route::get('/course/delete/{id}', [\App\Http\Controllers\CourseController::class, 'delete'])->name('app.course.delete');
    Route::post('/course/add', [\App\Http\Controllers\CourseController::class, 'add'])->name('app.course.add');
    Route::get('/course/add', [\App\Http\Controllers\CourseController::class, 'addForm'])->name('app.course.add');

    //ClassRooms
    Route::get('/classroom/list', [\App\Http\Controllers\ClassroomController::class, 'list'])->name('app.classroom.list');
    Route::get('/classroom/edit/{id}', [\App\Http\Controllers\ClassroomController::class, 'edit'])->name('app.classroom.edit');
    Route::put('/classroom/update', [\App\Http\Controllers\ClassroomController::class, 'update'])->name('app.classroom.update');
    Route::get('/classroom/delete/{id}', [\App\Http\Controllers\ClassroomController::class, 'delete'])->name('app.classroom.delete');
    Route::post('/classroom/add', [\App\Http\Controllers\ClassroomController::class, 'add'])->name('app.classroom.add');
    Route::get('/classroom/add', [\App\Http\Controllers\ClassroomController::class, 'addForm'])->name('app.classroom.add');

     //School_call
     Route::get('/school_call/list', [\App\Http\Controllers\SchoolCallController::class, 'list'])->name('app.school_call.list');
     Route::get('/school_call/edit/{id}', [\App\Http\Controllers\SchoolCallController::class, 'edit'])->name('app.school_call.edit');
     Route::put('/school_call/update', [\App\Http\Controllers\SchoolCallController::class, 'update'])->name('app.school_call.update');
     Route::get('/school_call/delete/{id}', [\App\Http\Controllers\SchoolCallController::class, 'delete'])->name('app.school_call.delete');
     Route::post('/school_call/add', [\App\Http\Controllers\SchoolCallController::class, 'add'])->name('app.school_call.add');
     Route::get('/school_call/add', [\App\Http\Controllers\SchoolCallController::class, 'addForm'])->name('app.school_call.add');

    //School_call
    Route::get('/school_subject/list', [\App\Http\Controllers\SchoolSubjectController::class, 'list'])->name('app.school_subject.list');
    Route::get('/school_subject/edit/{id}', [\App\Http\Controllers\SchoolSubjectController::class, 'edit'])->name('app.school_subject.edit');
    Route::put('/school_subject/update', [\App\Http\Controllers\SchoolSubjectController::class, 'update'])->name('app.school_subject.update');
    Route::get('/school_subject/delete/{id}', [\App\Http\Controllers\SchoolSubjectController::class, 'delete'])->name('app.school_subject.delete');
    Route::post('/school_subject/add', [\App\Http\Controllers\SchoolSubjectController::class, 'add'])->name('app.school_subject.add');
    Route::get('/school_subject/add', [\App\Http\Controllers\SchoolSubjectController::class, 'addForm'])->name('app.school_subject.add');
});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});