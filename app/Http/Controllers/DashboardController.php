<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Work;
<<<<<<< HEAD
use App\Models\Information;
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc

class DashboardController extends Controller
{

// ! ||--------------------------------------------------------------------------------||
// ! ||                          to view admin panal home page                         ||
// ! ||--------------------------------------------------------------------------------||

    public function index()
    {
        $data = Project::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        $educations = Education::all();
        $works = Work::all();
        $informations = Information::all();

        if (!auth()->check()) {
            return redirect()->route('login');
        }
        else{
            return view('dashboard.index', compact('data', 'experiences', 'skills', 'educations','informations', 'works'));

        }


    }

    // public function PDF()
    // {
    //     return view('dashboard.PDF.index');
    // }

    // public function PDF($filename)
    // {
    //     $path = storage_path('website/assets/file_pdf/' . $filename);

    //     if (!Storage::exists($path)) {
    //         abort(404);
    //     }

    //     $file = Storage::get($path);
    //     $type = Storage::mimeType($path);

    //     return response($file)->header('Content-Type', $type);
    // }
<<<<<<< HEAD



    // public function PDF(){
    //     $pdf = Storage::get('dashboard/assets/pdf/c_v.pdf');
    //     $pdfBase64 = base64_encode($pdf);
    //     return view('dashboard.PDF.index')->with('pdfBase64', $pdfBase64);
    // }


    public function PDF(){
        $informations = Information::all();

        return view('dashboard.PDF.index',compact('informations'));
=======
    public function PDF()
    {
        return view('dashboard.PDF.index');
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
    }

    public function showExperiences()
{

    return view('dashboard.index', compact('experiences'));
}
}