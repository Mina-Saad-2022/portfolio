<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class skillsController extends Controller
{

// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open  skills                            ||
// ! ||--------------------------------------------------------------------------------||

    public function skills()
    {
        $skills = Skill::all();
        return view('dashboard.skills.index')->with('skills', $skills);
    }
// ! ||--------------------------------------------------------------------------------||
// ! ||                         to open create work skills                         ||
// ! ||--------------------------------------------------------------------------------||

    public function create_skills()
    {
        return view('dashboard.skills.create.index');
    }
// ! ||--------------------------------------------------------------------------------||
// ! ||                          to create new skills                         ||
// ! ||--------------------------------------------------------------------------------||
    // public function new_skills(Request $request)
    // {
    //     foreach ($request['skills'] as $index => $skill) {
    //         $createdSkill = Skill::create([
    //             'category' => $request['category'][$index],
    //             'ratio' => $request['ratio'][$index],
    //             'skill' => $skill,
    //         ]);
    //         return redirect()->route('dashboard.skills');
    //     }
    // }
    public function new_skills(Request $request)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        foreach ($request['skills'] as $index => $skill) {
            $createdSkill = Skill::create([
                'category' => $request['category'][$index],
                'ratio' => $request['ratio'][$index],
                'skill' => $skill,
            ]);
        }
        session(['create' => $message]);
        return redirect()->route('dashboard.skills');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to edit skills                               ||
// ! ||--------------------------------------------------------------------------------||
    public function edit_skills($id)
    {
        $skills = Skill::find($id);
        return view('dashboard.skills.edit.index', compact('skills'));
    }

    public function update_skills(Request $request, $id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $skills = Skill::find($id);
        $skills->skill = $request->input('skills');
        $skills->category = $request->input('category');
        $skills->ratio = $request->input('ratio');

        $skills->save();
        session(['edit' => $message]);

        return redirect()->route('dashboard.skills');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to destroy project                               ||
// ! ||--------------------------------------------------------------------------------||

    public function destroy_skills($id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $skills = Skill::find($id)->delete();
        session(['delete' => $message]);
        return redirect()->route('dashboard.skills');
        // Redirect to a success page or display a success message
    }
<<<<<<< HEAD

    public function login()
    {
        return view('auth.login');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                              for delete row select                             ||
// ! ||--------------------------------------------------------------------------------||

    public function delete_Selected_skills(Request $request)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];

        if ($request->has('selectedIds')) {
            $ids = $request->input('selectedIds');

            // Convert the comma-separated string to an array of integers
            $ids = explode(',', implode(',', $ids));

            // Delete the rows
            Skill::whereIn('id', $ids)->delete();
            session(['delete' => $message]);
            // Redirect to the dashboard
            return redirect()->back()->with('message', 'Selected rows deleted successfully.');
        }
    }

<<<<<<< HEAD
}
=======
=======
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
}
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
