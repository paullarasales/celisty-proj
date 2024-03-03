<?php

use App\Http\Controllers\PagesContoller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/check-name', function (Request $request) {
    $name = $request->input('name');

    if ($name === 'Celisty' || $name === 'celisty') {
        session(['authenticaded' => true]);
        return redirect()->route('main');
    } else {
        $message = "You Are Not My Girlfriend (・_・;)";    
        return view('welcome', compact('message'));
    }
})->name('check-name');

Route::get('/main', [PagesContoller::class, 'main'])->name('main');

Route::get('/main-paul', [PagesContoller::class, 'rant']);

Route::get('/main-view', [PagesContoller::class, 'main_view'])->name('main-view');

Route::post('/rant-create', [PostController::class, 'create'])->name('create');

Route::delete('/delete/{rantid}', [PostController::class, 'destroy'])->name('destroy');

