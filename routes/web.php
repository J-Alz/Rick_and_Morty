<?php

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
    return view('welcome');
});
//Route::get('/', function(){return view('components.board');});
/* SHOWCONTROLLER */
route::get('/',[App\Http\Controllers\showController::class, 'showDataInView']);
route::get('/human',[App\Http\Controllers\showController::class, 'showSpecieHuman']);
route::get('/alien',[App\Http\Controllers\showController::class, 'showSpecieAlien']);
route::get('/humanoid',[App\Http\Controllers\showController::class, 'showSpecieHumanoid']);
route::get('/poopybutthole',[App\Http\Controllers\showController::class, 'showSpeciePoopybutthole']);
route::get('/mythilogical',[App\Http\Controllers\showController::class, 'showSpecieMythilogical']);
route::get('/animal',[App\Http\Controllers\showController::class, 'showSpecieAnimal']);
route::get('/robot',[App\Http\Controllers\showController::class, 'showSpecieRobot']);
route::get('/cronenberg',[App\Http\Controllers\showController::class, 'showSpecieCronenberg']);
route::get('/search',[App\Http\Controllers\showController::class, 'showSearch'])->name('showSearch');

route::get('/character/{id}',[App\Http\Controllers\showController::class,'showCharacterDetail'])->name('characterDetail');
//Route::get('/all', [App\Http\Controllers\ApiController::class, 'index']);
/* APICONTROLLER */
Route::get('/consume-api', [App\Http\Controllers\ApiController::class, 'consumeAPI_saveAPI']);