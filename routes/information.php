<?php

use App\Http\Controllers\Dashboard\InformationController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(InformationController::class)->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('/all_information', 'all_information')->name('information');
    Route::get('/edit_information', 'edit_information')->name('edit_information');
    Route::post('/create_information', 'create_information')->name('create_information');
});

// Route::get('/view-pdf', function () {
//     $filePath = public_path('dashboard/assets/pdf/c_v.pdf');

//     $headers = [
//         'Content-Type' => 'application/pdf',
//     ];

//     return response()->file($filePath, $headers);
// })->name('view.pdf');

Route::get('/view-image', function () {
    $pdfPath_t = storage_path('app/dashboard/assets/images/information/banner.png');
    return response()->file($pdfPath_t);
})->name('view-image');

Route::get('/view-pdf', function () {
    $pdfPath = storage_path('app/dashboard/assets/pdf/c_v.pdf');
    return response()->file($pdfPath);
})->name('view-pdf');

