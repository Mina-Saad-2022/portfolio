<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Work;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class worksController
{

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to create new work                               ||
// ! ||--------------------------------------------------------------------------------||

    public function new_work(Request $request)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        foreach ($request->work as $works) {
            $work = Work::create([
                'work' => $works,
            ]);
        }
        session(['create' => $message]);
        return redirect()->route('dashboard.education');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to edit work                                     ||
// ! ||--------------------------------------------------------------------------------||
    public function edit_work($id)
    {
        $work = Work::find($id);
        return view('dashboard.Education_work.work.edit.index', compact('work'));
    }

    public function update_work(Request $request, $id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $works = Work::find($id);
        $works->work = $request->input('work');
        $works->save();
        session(['edit' => $message]);
        return redirect()->route('dashboard.education');
    }

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to destroy work                                  ||
// ! ||--------------------------------------------------------------------------------||

    public function destroy_work($id)
    {
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $work = Work::find($id)->delete();
        Alert::toast('Lorem ipsum dolor sit amet.');
        session(['delete' => $message]);

        return redirect()->route('dashboard.education');
    }

    public function delete_Selected_work(Request $request)
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
            Work::whereIn('id', $ids)->delete();
            session(['delete' => $message]);
            return redirect()->back()->with('message', 'Selected rows deleted successfully.');

        }
    }
}