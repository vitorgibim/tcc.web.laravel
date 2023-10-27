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
    Route::get('/students/add', function () {
        return view('app.student.add');
    });

    //Teachers
    Route::get('/teachers/list', [\App\Http\Controllers\TeacherController::class, 'list'])->name('app.teacher.list');
    Route::get('/teachers/edit/{id}', [\App\Http\Controllers\TeacherController::class, 'edit'])->name('app.teacher.edit');
    Route::put('/teachers/update', [\App\Http\Controllers\TeacherController::class, 'update'])->name('app.teacher.update');
    Route::get('/teachers/delete/{id}', [\App\Http\Controllers\TeacherController::class, 'delete'])->name('app.teacher.delete');
    Route::post('/teachers/add', [\App\Http\Controllers\TeacherController::class, 'add'])->name('app.teacher.add');
    Route::get('/teachers/add', function () {
        return view('app.teacher.add');
    });

    //Teachers
    Route::get('/beacon/list', [\App\Http\Controllers\BeaconController::class, 'list'])->name('app.beacon.list');
    Route::get('/beacon/edit/{id}', [\App\Http\Controllers\BeaconController::class, 'edit'])->name('app.beacon.edit');
    Route::put('/beacon/update', [\App\Http\Controllers\BeaconController::class, 'update'])->name('app.beacon.update');
    Route::get('/beacon/delete/{id}', [\App\Http\Controllers\BeaconController::class, 'delete'])->name('app.beacon.delete');
    Route::post('/beacon/add', [\App\Http\Controllers\BeaconController::class, 'add'])->name('app.beacon.add');
    Route::get('/beacon/add', function () {
        return view('app.beacon.add');
    });

});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});