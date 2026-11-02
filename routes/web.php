
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->group(function () {
    Route::get('/my-favorites', [FavoriteController::class, 'index'])
        ->name('favorites.index');

    Route::post('/favorites/{place}', [FavoriteController::class, 'store'])
        ->name('favorites.store');

    Route::delete('/favorites/{place}', [FavoriteController::class, 'destroy'])
        ->name('favorites.destroy');
});


Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');


Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');




Route::get('/contact', [TourismController::class, 'contact'])->name('contact');
Route::post('/contact', [TourismController::class, 'storeContact'])->name('contact.store');
Route::get('/', [TourismController::class, 'home'])->name('home');
Route::get('/category/{id}', [TourismController::class, 'categoryPage'])->name('category');
Route::get('/place/{slug}', [TourismController::class, 'placeDetail'])->name('place.detail');

Route::get('/about', [TourismController::class, 'about'])->name('about');
Route::get('/contact', [TourismController::class, 'contact'])->name('contact');

Route::get('/search-places', [PlaceController::class, 'search'])->name('places.search');