<?php

use App\Http\Controllers\Dashboard\experinceController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(experinceController::class)->prefix('dashboard')->as('dashboard.')->group(function () {

//  *--------------------------------------------------------------------------------||
//  *                             to open experience page                            ||
//  *--------------------------------------------------------------------------------||
    Route::get('/experience', 'experience')->name('experience');
//  *--------------------------------------------------------------------------------||
//  *                         to open create experience page                         ||
//  *--------------------------------------------------------------------------------||
    Route::get('/create_experience', 'create_experience')->name('create_experience');
//  *--------------------------------------------------------------------------------||
//  *                            to create new experience                            ||
//  *--------------------------------------------------------------------------------||
    Route::post('/new_experience', 'new_experience')->name('new_experience');
//  *--------------------------------------------------------------------------------||
//  *                            to open edit project page                           ||
//  *--------------------------------------------------------------------------------||
    Route::get('/experiences/{id}/edit', 'edit_experience')->name('edit_experience');
    Route::post('/update_experience/{id}', 'update_experience')->name('update_experience');
//  *--------------------------------------------------------------------------------||
//  *                              to delete the project                             ||
//  *--------------------------------------------------------------------------------||
    Route::get('/destroy_experience/{id}', 'destroy_experience')->name('destroy_experience');

//  *-------------------------------------------------------------------------------||
//  *                              to delete row select                             ||
//  *-------------------------------------------------------------------------------||
    Route::post('/delete_selected_Experience', 'delete_Selected_Experience')->name('selected_experience');
});