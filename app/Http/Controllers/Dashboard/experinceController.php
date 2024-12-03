<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\ExperinceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class experinceController
{

// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open work experience                            ||
// ! ||--------------------------------------------------------------------------------||

    public function experience()
    {
        $experiences = Experience::all();
        return view('dashboard.experience.index')->with('experiences', $experiences);
    }
// ! ||--------------------------------------------------------------------------------||
// ! ||                         to open create work experience                         ||
// ! ||--------------------------------------------------------------------------------||

    public function create_experience()
    {
        return view('dashboard.experience.create.index');
    }
// ! ||--------------------------------------------------------------------------------||
// ! ||                          to create new work experience                         ||
// ! ||--------------------------------------------------------------------------------||
    public function new_experience(ExperinceRequest $request)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];

        foreach ($request->experience as $experience) {
            $experience = Experience::create([
                'experiences' => $experience,
            ]);
        }
        session(['create' => $message]);
        return redirect()->route('dashboard.experience');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to edit experience                               ||
// ! ||--------------------------------------------------------------------------------||
    public function edit_experience($id)
    {
        $experiences = Experience::find($id);
        return view('dashboard.experience.edit.index', compact('experiences'));
    }

    public function update_experience(ExperinceRequest $request, $id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];

        $experiences = Experience::find($id);
        $experiences->experiences = $request->input('experience');
        $experiences->save();
        session(['edit' => $message]);
        return redirect()->route('dashboard.experience');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to destroy project                               ||
// ! ||--------------------------------------------------------------------------------||

    public function destroy_experience($id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];

        $experiences = Experience::find($id)->delete();
        session(['delete' => $message]);

        return redirect()->route('dashboard.experience');
        // Redirect to a success page or display a success message
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                              for delete row select                             ||
// ! ||--------------------------------------------------------------------------------||

    public function delete_Selected_Experience(Request $request)
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
            Experience::whereIn('id', $ids)->delete();
            session(['delete' => $message]);

            // Redirect to the dashboard
            return redirect()->back()->with('message', 'Selected rows deleted successfully.');
        }
    }

}