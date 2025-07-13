<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactus = Contactus::all();
        return view('admin.contactus.index', compact('contactus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'admin.contactus.create');
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
                $input[$image] = fileUpload($request, $image, 'contactus');
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
        Contactus::create($input);

        return redirect()->route('contactus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contactus = Contactus::findOrFail($id);
        return view('admin.contactus.edit', compact('contactus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactus $contactus)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            if ($contactus->image && File::exists(public_path($contactus->image))) {
                File::delete(public_path($contactus->image));
            }
            $image = $request->image;
            $imageName =  time() . $image->getClientOriginalName();
            $path = "/images/contactus/";
            $image->move(public_path($path), $imageName);
            $imagepath = $path . $imageName;
            $input['image'] = $imagepath;
        }

        $contactus->update($input);
        return redirect()->route(route: 'admin.contactus.index')->with('success', 'contactus updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contactus = Contactus::findOrFail($id);
        $contactus->delete();
        return redirect()->route('contactus.index');
    }
}
