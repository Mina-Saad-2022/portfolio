<?php

use App\Http\Controllers\Dashboard\EducationController;
use App\Http\Controllers\Dashboard\worksController;


use Illuminate\Support\Facades\Route;


Route::middleware('auth')->controller(EducationController::class)->prefix('dashboard')->as('dashboard.')->group(function () {

// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open create education and work page             ||
// ! ||--------------------------------------------------------------------------------||
Route::get('/create_education', 'create_education')->name('create_education');
// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open education and work page                    ||
// ! ||--------------------------------------------------------------------------------||
Route::get('/education', 'education')->name('education');
// ! ||--------------------------------------------------------------------------------||
// ! ||                            to create new education                             ||
// ! ||--------------------------------------------------------------------------------||
Route::post('/new_education', 'new_education')->name('new_education');
// ! ||--------------------------------------------------------------------------------||
// ! ||                            to open edit education page                         ||
// ! ||--------------------------------------------------------------------------------||
Route::get('/education/{id}/edit', 'edit_education')->name('edit_education');
Route::post('/update_education/{id}', 'update_education')->name('update_education');
// ! ||--------------------------------------------------------------------------------||
// ! ||                              to delete the education                           ||
// ! ||--------------------------------------------------------------------------------||
Route::get('/destroy_education/{id}', 'destroy_education')->name('destroy_education');

// ! ||-------------------------------------------------------------------------------||
// ! ||                              to delete row select                             ||
// ! ||-------------------------------------------------------------------------------||

Route::post('/delete_selected_Education', 'delete_Selected_Education')->name('selected_education');
});




Route::middleware('auth')->controller(worksController::class)->prefix('dashboard')->as('dashboard.')->group(function () {

// ! ||--------------------------------------------------------------------------------||
// ! ||                            to create new work                                  ||
// ! ||--------------------------------------------------------------------------------||
Route::post('/new_work', 'new_work')->name('new_work');

// ! ||--------------------------------------------------------------------------------||
// ! ||                            to open edit education page                         ||
// ! ||--------------------------------------------------------------------------------||
Route::get('/work/{id}/edit', 'edit_work')->name('edit_work');
Route::post('/update_work/{id}', 'update_work')->name('update_work');
// ! ||--------------------------------------------------------------------------------||
// ! ||                              to delete the work                           ||
// ! ||--------------------------------------------------------------------------------||
Route::get('/destroy_work/{id}', 'destroy_work')->name('destroy_work');

// ! ||-------------------------------------------------------------------------------||
// ! ||                              to delete row select                             ||
// ! ||-------------------------------------------------------------------------------||

Route::post('/delete_selected_work', 'delete_Selected_work')->name('selected_work');
});