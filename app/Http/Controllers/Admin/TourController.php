<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::orderBy('id', 'DESC')->get();
        return view('adminpanel.pages.tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinations = Destination::orderBy('id', 'DESC')->get();
        $categories = TourCategory::orderBy('id', 'DESC')->get();
        return view('adminpanel.pages.tours.create',compact('categories', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|unique:blogs,title',
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'author_name' => 'string|nullable',
            'image' => 'file|nullable',
            'destination_id' => 'integer|nullable',
            'tour_category_id' => 'integer|nullable',
        ]);

         $inputs = $request->all();
         $inputs['slug'] = Str::slug($request->title);
        if ($request->hasFile('thumbnail')) {
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailPath = $thumbnailFile->store('tours','public');
            $inputs['thumbnail'] = $thumbnailPath;
        }

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imagePath = $imageFile->store('tours','public');
            $inputs['image'] = $imagePath;
        }


        Tour::create($inputs);

        return redirect()->route('admin.tours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $destinations = Destination::orderBy('id', 'DESC')->get();
        $categories = TourCategory::orderBy('id', 'DESC')->get();
        return view('adminpanel.pages.tours.create',compact('categories', 'destinations', ''));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        $tour = Tour::findOrFail($tour->id);
        if ($tour) {
            $tour->delete();
            return response()->json(['success' => 'Deleted Successfully !']);
        }

        return response()->json(['error' => 'Error while deleting !']);
    }
}