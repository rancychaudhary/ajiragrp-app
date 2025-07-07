<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $blogs = Blog:: all();

        return view( 'admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->all();
        // dd($input);

        $input['slug']= $input['slug']? $input['slug']: make_slug($input['title']);

        if ($request->hasFile('image')){
            $input['image']=fileUpload($request,'image','blog');
        }
        if ($request->hasFile('image_1')) {
            $input['image_1'] = fileUpload($request, 'image_1', 'blog');
        }
        if ($request->hasFile('image_2')) {
            $input['image_2'] = fileUpload($request, 'image_2', 'blog');
        }

        Blog::create($input);

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
