<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Education;
use App\Models\Work;
use Illuminate\Http\Request;

class EducationController
{
// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open education page                             ||
// ! ||--------------------------------------------------------------------------------||
    public function education()
    {
        $education = Education::all();
        $work = Work::all();
        return view('dashboard.Education_work.index', compact('education', 'work'));
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                          to open create education page                         ||
// ! ||--------------------------------------------------------------------------------||
    public function create_education()
    {
        return view('dashboard.Education_work.create.index');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                             to create new education                            ||
// ! ||--------------------------------------------------------------------------------||

    public function new_education(Request $request)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        foreach ($request->education as $educations) {
            $education = Education::create([
                'education' => $educations,
            ]);
        }
        session(['create' => $message]);
        return redirect()->route('dashboard.education');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to edit education                                ||
// ! ||--------------------------------------------------------------------------------||
    public function edit_education($id)
    {
        $education = Education::find($id);
        return view('dashboard.Education_work.edit.index', compact('education'));
    }

    public function update_education(Request $request, $id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $educations = Education::find($id);
        $educations->education = $request->input('education');
        $educations->save();
        session(['edit' => $message]);
        return redirect()->route('dashboard.education');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to destroy education                             ||
// ! ||--------------------------------------------------------------------------------||

    public function destroy_education($id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $education = Education::find($id)->delete();
        session(['delete' => $message]);
        return redirect()->route('dashboard.education');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                              for delete row select                             ||
// ! ||--------------------------------------------------------------------------------||

    public function delete_Selected_Education(Request $request)
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
            Education::whereIn('id', $ids)->delete();
            session(['delete' => $message]);
            // Redirect to the dashboard
            return redirect()->back()->with('message', 'Selected rows deleted successfully.');
        }
    }

}