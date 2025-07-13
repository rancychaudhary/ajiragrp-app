<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = project::all();
        return view( 'admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];
        // dd($input);

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'pages');
            }
        }


        // if ($request->hasFile('image')) {
        //     $input['image'] = fileUpload($request, 'image', 'project');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'project');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'project');
        // }
        project::create($input);

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            if ($project->image && File::exists(public_path($project->image))) {
                File::delete(public_path($project->image));
            }
            $image = $request->image;
            $imageName =  time() . $image->getClientOriginalName();
            $path = "/images/projects/";
            $image->move(public_path($path), $imageName);
            $imagepath = $path . $imageName;
            $input['image'] = $imagepath;
        }

        $project->update($input);
        return redirect()->route(route: 'admin.project.index')->with('success', 'project updatedapp/Http/Controllers/admin/NewController.php successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index');
    }
}
