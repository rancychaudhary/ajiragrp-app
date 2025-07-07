<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view( 'admin.project.index', compact('project'));
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
        // dd($input);
        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        if ($request->hasFile('image')) {
            $input['image'] = fileUpload($request, 'image', 'project');
        }
        if ($request->hasFile('image_1')) {
            $input['image_1'] = fileUpload($request, 'image_1', 'project');
        }
        if ($request->hasFile('image_2')) {
            $input['image_2'] = fileUpload($request, 'image_2', 'project');
        }
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
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
