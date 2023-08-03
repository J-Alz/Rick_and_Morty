<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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

/* APICONTROLLER */
Route::get('/consume-api', [App\Http\Controllers\ApiController::class, 'consumeAPI_saveAPI']);