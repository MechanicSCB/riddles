<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RiddleController;
use App\Jobs\ReconcileAccount;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [MainController::class,'index']);

//Route::get('/', function () {
//    $user = \App\Models\User::first();
//
//    //dispatch(new ReconcileAccount($user));
//    ReconcileAccount::dispatch($user);
//
//    return 'Finished';
//});
//

//Route::view('/','welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/riddles', [RiddleController::class, 'index'])->name('riddles.index');
Route::get('/riddles/create', [RiddleController::class, 'create'])->name('riddles.create');
Route::post('/riddles/', [RiddleController::class, 'store'])->name('riddles.store');
Route::get('/riddles/{riddle}/edit', [RiddleController::class, 'edit'])->name('riddles.edit');
Route::patch('/riddles/{riddle}', [RiddleController::class, 'update'])->name('riddles.update');
Route::get('/riddles/{riddle}', [RiddleController::class, 'show'])->name('riddles.show');
Route::delete('/riddles/{riddle}', [RiddleController::class, 'destroy'])->name('riddles.destroy');

Route::post('/riddles/{riddle}', [RiddleController::class, 'check'])->name('riddles.check');


// очистка кэша
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
//    Artisan::call('backup:clean');
    return back();
});
