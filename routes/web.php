<?php

use App\Http\Controllers\MessageController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Estimate;
use App\Livewire\Experiences;
use App\Livewire\Home;
use App\Livewire\Portfolio;
use App\Livewire\Prices;
use App\Livewire\Services;
use App\Livewire\Skills;
use App\Livewire\Studies;
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

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/studies', Studies::class)->name('studies');
Route::get('/experiences', Experiences::class)->name('experiences');
Route::get('/skills', Skills::class)->name('skills');
Route::get('/services', Services::class)->name('services');
Route::get('/prices', Prices::class)->name('prices');
Route::get('/portfolio', Portfolio::class)->name('portfolio');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/estimate', Estimate::class)->name('estimate');


Route::get('/messages', [MessageController::class, 'index'])->name('message.index');
Route::post('/messages', [MessageController::class, 'massDestroy'])->name('message.mass_delete');
Route::get('/message/{id}', [MessageController::class, 'show'])->name('message.show');
Route::post('/message/delete/{id}', [MessageController::class, 'destroy'])->name('message.delete');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
