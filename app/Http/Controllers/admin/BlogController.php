<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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

        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'blog');
            }
        }
        // if ($request->hasFile('image')){
        //     $input['image']=fileUpload($request,'image','blog');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'blog');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'blog');
        // }

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
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {

        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     if ($blog->image && File::exists(public_path($blog->image))) {
        //         File::delete(public_path($blog->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/blogs/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $blog->update($input);
        $blog->update($input);

        $rules = [

            'title' => 'required|min:3',
            'description' => 'required|string',



        ];


        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('blogs.edit', $blog)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($blog->$image != '') {
                    $file = $blog->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'blog');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($blog->$image != '') {
                    $file = $blog->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $blog->update($input);
        return redirect()->route(route: 'blogs.index')->with('success', 'blog updatedapp/Http/Controllers/admin/NewController.php successfully');
        // $input = $request->all();

        // if ($image = $request->file('image')) {
        //     if ($blog->image && File::exists(public_path($blog->image))) {
        //         File::delete(public_path($blog->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/blogs/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $blog->update($input);
        // return redirect()->route(route: 'admin.blogs.index')->with('success', 'blog updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // $imagelist = ['image', 'image_1', 'image_2'];

        // foreach ($imagelist as $image) {
        //     if ($blog->$image != "") {
        //         $file = $blog->$image;
        //         removeFile($file);
        //     }
        // }
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index');

    }
}
