<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Recipe\RecipeController;
use App\Http\Livewire\Recipes;
use App\Http\Livewire\RecipeCreate;


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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('recipe', RecipeController::class);

Route::get('recipes', Recipes::class)->name('recipes');
Route::get('create', RecipeCreate::class)->name('create');
