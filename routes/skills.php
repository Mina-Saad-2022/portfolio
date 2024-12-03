<?php

use App\Http\Controllers\Dashboard\skillsController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::middleware('auth')->controller(SkillsController::class)->prefix('dashboard')->as('dashboard.')->group(function () {
=======
Route::controller(skillsController::class)->prefix('dashboard')->as('dashboard.')->group(function () {
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a

// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open skills page                                ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/skills', 'skills')->name('skills');
// ! ||--------------------------------------------------------------------------------||
// ! ||                         to open create skills page                             ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/create_skills', 'create_skills')->name('create_skills');
// ! ||--------------------------------------------------------------------------------||
// ! ||                            to create new skills                                ||
// ! ||--------------------------------------------------------------------------------||
    Route::post('/new_skills', 'new_skills')->name('new_skills');
// ! ||--------------------------------------------------------------------------------||
// ! ||                            to open edit project page                           ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/skillss/{id}/edit', 'edit_skills')->name('edit_skills');
    Route::get('/update_skills/{id}', 'update_skills')->name('update_skills');
// ! ||--------------------------------------------------------------------------------||
// ! ||                              to delete the project                             ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/destroy_skills/{id}', 'destroy_skills')->name('destroy_skills');

// ! ||-------------------------------------------------------------------------------||
// ! ||                              to delete row select                             ||
// ! ||-------------------------------------------------------------------------------||

    Route::post('/delete_selected_skills', 'delete_Selected_skills')->name('selected_skills');

});

Route::get('/test', function () {
    return view('dashboard.projects.create.test');
});