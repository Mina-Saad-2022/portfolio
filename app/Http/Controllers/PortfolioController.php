<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Work;
use App\Models\Information;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PortfolioController extends Controller
{
    public function index()
    {
<<<<<<< HEAD

=======
<<<<<<< HEAD
        
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
      // Retrieve data from the database
      $data = Project::all();
      $experiences = Experience::all();
      $skills = Skill::all();
      $educations  = Education::all();
      $works  = Work::all();
<<<<<<< HEAD
      $informations = Information::all();


      return view('website.index',compact(['data','experiences','skills','informations','educations','works']));
=======
=======
        // Retrieve data from the database
        $data = Project::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        $educations = Education::all();
        $works = Work::all();
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a

        return view('website.index', compact('data', 'experiences', 'skills', 'educations', 'works'));
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
    }

<<<<<<< HEAD
public function test(){
    return view('dashboard.projects.create.test');

=======
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
}


}