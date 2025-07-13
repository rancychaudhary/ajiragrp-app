<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::all();

        return view('admin.gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->all();
        // dd($input);

        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'gallery');
            }
        }
        // if ($request->hasFile('image')){
        //     $input['image']=fileUpload($request,'image','gallery');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'blog');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'blog');
        // }

        Gallery::create($input);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            if ($gallery->image && File::exists(public_path($gallery->image))) {
                File::delete(public_path($gallery->image));
            }
            $image = $request->image;
            $imageName =  time() . $image->getClientOriginalName();
            $path = "/images/blogs/";
            $image->move(public_path($path), $imageName);
            $imagepath = $path . $imageName;
            $input['image'] = $imagepath;
        }

        $gallery->update($input);
        return redirect()->route(route: 'admin.gallery.index')->with('success', 'gallery updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // $imagelist = ['image', 'image_1', 'image_2'];

        // foreach ($imagelist as $image) {
        //     if ($gallery->$image != "") {
        //         $file = $gallery->$image;
        //         removeFile($file);
        //     }
        // }
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('gallery.index');
    }
}
