<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Recipe\RecipeController;
use App\Http\Livewire\Recipe\Recipes;
use App\Http\Livewire\Recipe\RecipeCreate;
use App\Http\Livewire\Recipe\RecipeEdit;


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

// Route::resource('recipe', RecipeController::class);

Route::group(['prefix' => 'recipe', 'middleware' => 'auth'], function(){
    Route::get('/', Recipes::class)->name('recipe.recipes');
    Route::get('/create', RecipeCreate::class)->name('recipe.create');
    Route::get('/edit/{id}', RecipeEdit::class)->name('recipe.edit');
});