<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

// Import SweetAlert facade

class projectController extends Controller
{
    // ! ||--------------------------------------------------------------------------------||
    // ! ||                         to view create new project page                        ||
    // ! ||--------------------------------------------------------------------------------||

    public function create_project()
    {
        return view('dashboard.projects.create.index');
    }

    // ! ||--------------------------------------------------------------------------------||
    // ! ||                              to create new project                             ||
    // ! ||--------------------------------------------------------------------------------||

    public function create(ProjectRequest $request)
    {
        // dd($request);
        // important to use sweet alert
        $message = [
            'type' => 'success',
        ];
        $imageName = time() . Str::random(10) . '.' . $request->image->extension();
        // $request->image->storeAs('dashboard/assets/images/projects', $imageName);
        // $request->image->storeAs('public_html/dashboard/assets/images/projects', $imageName);
        $destinationPath = base_path('public_html/dashboard/assets/images/projects');

        $request->image->move($destinationPath, $imageName);

        foreach ($request['category'] as $index => $category) {
            Project::create([
                'category' => $category,
                'title' => $request['title'][$index],
                'url' => $request['url'][$index],
                'details' => $request['details'][$index],
                'image' => $imageName, // Use the $imageName variable here
            ]);
        }

        session(['create' => $message]);
        return redirect(route('dashboard.all'));
    }
    // public function create(ProjectRequest $request)
    // {
    //     // important to use sweet alert
    //     $message = [
    //         'type' => 'success',
    //     ];

    //     $imageName = time() . Str::random(10) . '.' . $request->image->extension(); // Replace 'default.jpg' with your default image name

    //     foreach ($request->file('image') as $image) {
    //         $uniqueImageName = time() . '_' . $image->getClientOriginalName(); // Create a unique name for each image
    //         $image->move(public_path('dashboard/assets/images/projects/'), $uniqueImageName);

    //         // You might perform further actions here if needed

    //         // Store or use $uniqueImageName based on your requirements
    //         $imageName = $uniqueImageName; // Update $imageName with the last uploaded image name
    //     }

    //     foreach ($request['category'] as $index => $category) {
    //         Project::create([
    //             'category' => $category,
    //             'title' => $request['title'][$index],
    //             'url' => $request['url'][$index],
    //             'details' => $request['details'][$index],
    //             'image' => $imageName, // Use the $imageName variable here
    //         ]);
    //     }

    //     session(['create' => $message]);
    //     return redirect(route('dashboard.all'));
    // }

    // ! ||--------------------------------------------------------------------------------||
    // ! ||                           all projects in data table                           ||
    // ! ||--------------------------------------------------------------------------------||

    public function all_projects()
    {
        $data = Project::all();
        return view('dashboard.projects.index')->with('data', $data);
    }

    // ! ||--------------------------------------------------------------------------------||
    // ! ||                                to edit projects                                ||
    // ! ||--------------------------------------------------------------------------------||

    public function edit($id)
    {
        $data = Project::find($id);
        return view('dashboard.projects.edit.index', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $message = ['type' => 'success'];

        // البحث عن المشروع
        $data = Project::find($id);

        if (!$data) {
            // لو المشروع مش موجود
            $message = [
                'type' => 'error',
                'text' => 'Project not found!'
            ];
            session(['edit' => $message]);
            return redirect()->route('dashboard.all');
        }

        // تحديث الصورة لو كانت مرفوعة
        if ($request->hasFile('image')) {
            $imageName = time() . Str::random(10) . '.' . $request->image->extension();
            $request->image->move(public_path('dashboard/assets/images/projects/'), $imageName);

            // حذف الصورة القديمة (اختياري)
            if ($data->image && file_exists(public_path('dashboard/assets/images/projects/' . $data->image))) {
                unlink(public_path('dashboard/assets/images/projects/' . $data->image));
            }

            $data->image = $imageName;
        }

        // تحديث باقي البيانات
        $data->title = $request->input('title');
        $data->url = $request->input('url');
        $data->details = $request->input('details');
        $data->category = $request->input('category');

        $data->save();

        session(['edit' => $message]);
        return redirect()->route('dashboard.all');
    }

    // ! ||--------------------------------------------------------------------------------||
    // ! ||                               to destroy project                               ||
    // ! ||--------------------------------------------------------------------------------||

    public function destroy($id)
    {
        $message = [
            'type' => 'success',
        ];
        $user = Project::find($id)->delete();
        session(['delete' => $message]);
        return redirect()->route('dashboard.all');
    }

    // ! ||--------------------------------------------------------------------------------||
    // ! ||                              for delete row select                             ||
    // ! ||--------------------------------------------------------------------------------||

    public function delete_Selected_Project(Request $request)
    {
        $message = [
            'type' => 'success',
        ];
        if ($request->has('selectedIds')) {
            $ids = $request->input('selectedIds');

            // Convert the comma-separated string to an array of integers
            $ids = explode(',', implode(',', $ids));

            // Delete the rows
            Project::whereIn('id', $ids)->delete();
            session(['delete' => $message]);
            // Redirect to the dashboard
            return redirect()->back()->with('message', 'Selected rows deleted successfully.');
        }
    }
}
