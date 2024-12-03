<?php

use App\Http\Controllers\Dashboard\projectController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(projectController::class)->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('/Portfolio', 'index')->name('index');
// ! ||--------------------------------------------------------------------------------||
// ! ||                         to open create new project page                        ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/create_project', 'create_project')->name('create');
// ! ||--------------------------------------------------------------------------------||
// ! ||                              to create new project                             ||
// ! ||--------------------------------------------------------------------------------||
    Route::post('/create', 'create')->name('upload');
// ! ||--------------------------------------------------------------------------------||
// ! ||                            to open all projects page                           ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/all_projects', 'all_projects')->name('all');
// ! ||--------------------------------------------------------------------------------||
// ! ||                            to open edit project page                           ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/project/{id}/edit', 'edit')->name('edit');
// ! ||--------------------------------------------------------------------------------||
// ! ||                               to edit the project                              ||
// ! ||--------------------------------------------------------------------------------||
    Route::POST('/project/{id}', 'update')->name('update');
// ! ||--------------------------------------------------------------------------------||
// ! ||                              to delete the project                             ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/projects/{id}', 'destroy')->name('destroy');

// ! ||-------------------------------------------------------------------------------||
// ! ||                              to delete row select                             ||
// ! ||-------------------------------------------------------------------------------||

    Route::post('/delete_selected_Project', 'delete_Selected_Project')->name('selected_projects');
});

Route::controller(projectController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
