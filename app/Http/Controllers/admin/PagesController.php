<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Pages::all();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'admin.pages.create');
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
        //     $input['image'] = fileUpload($request, 'image', 'page');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'page');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'page');
        // }
        Pages::create($input);

        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pages $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Pages::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pages $page)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            if ($page->image && File::exists(public_path($page->image))) {
                File::delete(public_path($page->image));
            }
            $image = $request->image;
            $imageName =  time() . $image->getClientOriginalName();
            $path = "/images/pages/";
            $image->move(public_path($path), $imageName);
            $imagepath = $path . $imageName;
            $input['image'] = $imagepath;
        }

        $page->update($input);
        return redirect()->route(route: 'admin.pages.index')->with('success', 'page updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Pages::findOrFail($id);
        $page->delete();
        return redirect()->route('pages.index');
    }
}
