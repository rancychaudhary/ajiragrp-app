<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Options::all();
        return view('admin.options.index', compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'admin.options.create');
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
                $input[$image] = fileUpload($request, $image, 'options');
            }
        }


        // if ($request->hasFile('image')) {
        //     $input['image'] = fileUpload($request, 'image', 'options');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'options');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'options');
        // }
        Options::create($input);

        return redirect()->route('options.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(options $options)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $options = Options::findOrFail($id);
        return view('admin.options.edit', compact('options'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Options $options)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            if ($options->image && File::exists(public_path($options->image))) {
                File::delete(public_path($options->image));
            }
            $image = $request->image;
            $imageName =  time() . $image->getClientOriginalName();
            $path = "/images/options/";
            $image->move(public_path($path), $imageName);
            $imagepath = $path . $imageName;
            $input['image'] = $imagepath;
        }

        $options->update($input);
        return redirect()->route(route: 'admin.options.index')->with('success', 'options updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $options = Options::findOrFail($id);
        $options->delete();
        return redirect()->route('options.index');
    }
}
