<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController
{
    public function all_information()
    {
        $informations = Information::all();
        return view('dashboard.information.index', compact('informations'));
    }
    public function edit_information()
    {
        $informations = Information::all();
        return view('dashboard.information.edit.index', compact('informations'));
    }

    // public function create_information(Request $request)
    // {
    //     $message = [
    //         'type' => 'success',
    //     ];

    //     $file = $request->file('pdf');
    //     $pdfName = 'c_v.pdf';
    //     $file->storeAs('dashboard/assets/pdf', $pdfName);

    //     $existingData = Information::first();
    //     $oldImageName = $existingData ? $existingData->image : null;

    //     $imageName = 'banner.png';
    //     $image = $request->file('image');
    //     $imagePath = storeAs('dashboard/assets/images/information/' . $imageName);
    // //   $imagePath =  $image->storeAs('dashboard/assets/images/information', $imageName);

    //     // $request->image->move(public_path('/dashboard/assets/images/information/'), $imageName);
    //   dd($imagePath);
    //     $existingData = Information::first();

    //     if ($existingData) {
    //         $existingData->update([
    //             'image' => $imageName,
    //             'email' => $request->input('email'),
    //             'phone' => $request->input('phone'),
    //             'address' => $request->input('address'),
    //             'github' => $request->input('github'),
    //             'facebook' => $request->input('facebook'),
    //             'whatsapp' => $request->input('whatsapp'),
    //             'instagram' => $request->input('instagram'),
    //             'pdf_file' => $pdfName,
    //         ]);
    //     } else {
    //         Information::create([
    //             'image' => $imageName,
    //             'email' => $request->input('email'),
    //             'phone' => $request->input('phone'),
    //             'address' => $request->input('address'),
    //             'github' => $request->input('github'),
    //             'facebook' => $request->input('facebook'),
    //             'whatsapp' => $request->input('whatsapp'),
    //             'instagram' => $request->input('instagram'),
    //             'pdf_file' => $pdfName,

    //         ]);
    //     }

    //     session(['create' => $message]);
    //     return redirect()->route('dashboard.information')->with('imagePath', $imagePath);
    // }






 public function create_information(Request $request)
    {
        $message = [
            'type' => 'success',
        ];

        // Handle PDF file
        $existingData = Information::first();
        $oldPdfName = $existingData ? $existingData->pdf_file : null;

        $pdfName = $oldPdfName ?: 'c_v.pdf'; // Use existing or default name

        if (!$oldPdfName) {
            $file = $request->file('pdf');

            // Check if a file was uploaded
            if ($file) {
                $file->storeAs('dashboard/assets/pdf', $pdfName);
            }
        }

        // Handle image file
        $existingImage = $existingData ? $existingData->image : null;

        $imageName = 'banner.png';
        $image = $request->file('image');

        // Use storeAs on the $image object
        $imagePath = $image->storeAs('dashboard/assets/images/information', $imageName);

        // Update or create Information model
        if ($existingData) {
            $existingData->update([
                'image' => $imageName,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'github' => $request->input('github'),
                'facebook' => $request->input('facebook'),
                'whatsapp' => $request->input('whatsapp'),
                'instagram' => $request->input('instagram'),
                'pdf_file' => $pdfName,
            ]);
        } else {
            Information::create([
                'image' => $imageName,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'github' => $request->input('github'),
                'facebook' => $request->input('facebook'),
                'whatsapp' => $request->input('whatsapp'),
                'instagram' => $request->input('instagram'),
                'pdf_file' => $pdfName,
            ]);
        }

        session(['create' => $message]);
        return redirect()->route('dashboard.information')->with('imagePath', $imagePath);
    }









//     public function create_information(Request $request)
// {
//     $message = ['type' => 'success'];

//     // Check if a file is present in the request
//     if ($request->hasFile('pdf')) {
//         $file = $request->file('pdf');

//         // Generate a unique name for the PDF file
//         $pdfName = 'c_v.pdf';

//         // Move the uploaded file to the specified directory
//         $file->move(public_path('dashboard\assets\pdf'), $pdfName);
//     }

//     $existingData = Information::first();

//     // Set up image handling - this part remains the same as in your previous code
//     $oldImageName = $existingData ? $existingData->image : null;
//     $imageName = 'banner.png';

//     // Update or create the information
//     if ($existingData) {
//         $existingData->update([
//             'image' => $imageName,
//             'email' => $request->input('email'),
//             'phone' => $request->input('phone'),
//             'address' => $request->input('address'),
//             'github' => $request->input('github'),
//             'facebook' => $request->input('facebook'),
//             'whatsapp' => $request->input('whatsapp'),
//             'instagram' => $request->input('instagram'),
//             'pdf_file' => $pdfName // Store the PDF file name in the 'pdf_file' column
//         ]);
//     } else {
//         Information::create([
//             'image' => $imageName,
//             'email' => $request->input('email'),
//             'phone' => $request->input('phone'),
//             'address' => $request->input('address'),
//             'github' => $request->input('github'),
//             'facebook' => $request->input('facebook'),
//             'whatsapp' => $request->input('whatsapp'),
//             'instagram' => $request->input('instagram'),
//             'pdf_file' => $pdfName // Store the PDF file name in the 'pdf_file' column
//         ]);
//     }

//     session(['create' => $message]);
//     return redirect()->route('dashboard.information');
// }

// public function create_information(Request $request)
// {
//     $message = ['type' => 'success'];

//     $file = $request->file('pdf');

//     // Generate a unique name for the PDF file
//     $pdfName = 'c_v.pdf';

//     // Move the uploaded file to the specified directory
//     $file->move(public_path('dashboard/assets/pdf'), $pdfName);

//     $existingData = Information::first();

//     // Set up image handling - this part remains the same as in your previous code
//     $oldImageName = $existingData ? $existingData->image : null;
//     $imageName = 'banner.png';

//     // Update or create the information
//     if ($existingData) {
//         $existingData->update([
//             'image' => $imageName,
//             'email' => $request->input('email'),
//             'phone' => $request->input('phone'),
//             'address' => $request->input('address'),
//             'github' => $request->input('github'),
//             'facebook' => $request->input('facebook'),
//             'whatsapp' => $request->input('whatsapp'),
//             'instagram' => $request->input('instagram'),
//             'pdf_file' => $pdfName // Store the PDF file name in the 'pdf_file' column
//         ]);
//     } else {
//         Information::create([
//             'image' => $imageName,
//             'email' => $request->input('email'),
//             'phone' => $request->input('phone'),
//             'address' => $request->input('address'),
//             'github' => $request->input('github'),
//             'facebook' => $request->input('facebook'),
//             'whatsapp' => $request->input('whatsapp'),
//             'instagram' => $request->input('instagram'),
//             'pdf_file' => $pdfName // Store the PDF file name in the 'pdf_file' column
//         ]);
//     }

//     session(['create' => $message]);
//     return redirect()->route('dashboard.information');
// }

    // public function create_information(Request $request)
    // {
    //     $message = ['type' => 'success'];

    //     $file = $request->file('pdf');

    //     // Generate a unique name for the PDF file
    //     $pdfName = 'c_v.pdf';

    //     // Move the uploaded file to the specified directory
    //     $file->move(public_path('dashboard/assets/pdf'), $pdfName);

    //     $existingData = Information::first();
    //     $oldImageName = $existingData ? $existingData->image : null;
    //     $imageName = 'banner.png';
    //     // Create an array with the information to be saved or updated
    //     $dataToSave = [
    //         'image' => $imageName, // Assuming a default image
    //         'email' => $request->input('email'),
    //         'phone' => $request->input('phone'),
    //         'address' => $request->input('address'),
    //         'github' => $request->input('github'),
    //         'facebook' => $request->input('facebook'),
    //         'whatsapp' => $request->input('whatsapp'),
    //         'instagram' => $request->input('instagram'),
    //         'pdf' => $pdfName, // Store the PDF file name in the 'pdf_file' column
    //     ];

    //     if ($existingData) {
    //         // Update the existing data if it exists
    //         $existingData->update($dataToSave);
    //     } else {
    //         // Create new data if it doesn't exist
    //         Information::create($dataToSave);
    //     }

    //     session(['create' => $message]);
    //     return redirect()->route('dashboard.information');
    // }

}