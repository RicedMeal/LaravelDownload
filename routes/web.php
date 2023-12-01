<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateProjectForm;

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
{{  }}

Route::view('/', 'layouts/app');

//Route::view('Projects', 'livewire/Projects/app');

Route::get('/create-project', function () {
    return view('livewire.Create_Projects.app');
})->name('create-project');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

?>
