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
            'title' => 'required|string|unique:tours,title',
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
            $thumbnailPath = $thumbnailFile->store('images/tours','public');
            $inputs['thumbnail'] = $thumbnailPath;
        }

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imagePath = $imageFile->store('images/tours','public');
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
        return view('adminpanel.pages.tours.edit',compact('categories', 'destinations', 'tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $this->validate($request, [
            'title' => 'required|string|unique:tours,title,'. $tour->id,
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'author_name' => 'string|nullable',
            'image' => 'file|nullable',
            'blog_category_id' => 'integer|nullable',
        ]);
        $tour = Tour::find($tour->id);
        $tour->title = $request->title;
        $tour->slug = Str::slug($request->title);
        $tour->includes = $request->includes;
        $tour->excludes = $request->excludes;
        $tour->per_person_booking_limit = $request->per_person_booking_limit;
        $tour->destination_id = $request->destination_id;
        $tour->tour_category_id = $request->tour_category_id;
        $tour->is_active = $request->is_active;
        $tour->group_limit = $request->group_limit;
        $tour->price = $request->price;
        $tour->features = $request->features;
        $tour->facilities = $request->facilities;
        $tour->duration = $request->duration;
        $tour->summary = $request->summary;
        $tour->description = $request->description;
        $tour->author_name = $request->author_name;
        if ($request->hasFile('thumbnail')) {
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailPath = $thumbnailFile->store('images/tours','public');
            $inputs['thumbnail'] = $thumbnailPath;
        }
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imagePath = $imageFile->store('images/tours','public');
            $inputs['image'] = $imagePath;
        }
        $tour->meta_tag_title = $request->meta_tag_title;
        $tour->meta_tag_keywords = $request->meta_tag_keywords;
        $tour->meta_tag_description = $request->meta_tag_description;
        $tour->save();
        return redirect()->route('admin.tours.index');

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
