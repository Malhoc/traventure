<?php

namespace App\Http\Controllers\Admin;

use App\Models\TourCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class TourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = TourCategory::orderBy('id', 'DESC')->get();
        return view('adminpanel.pages.tours.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pages.tours.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
        ]);

        TourCategory::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'))
        ]);

        return redirect()->back()->with(['success'=>'Class Successfully Saved.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TourCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function show(TourCategory $category)
    {
        return view('adminpanel.pages.classes.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clas  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(TourCategory $category)
    {
        return view('adminpanel.pages.classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clas  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourCategory $category)
    {
        $request->validate([
            'name' => 'required|string|max:20',
        ]);

        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->save();

        return redirect()->back()->with(['success'=>'Class Successfully Saved.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TourCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourCategory $category)
    {
        $category = TourCategory::findOrFail($category->id);
        if ($category) {
            $category->delete();
            return response()->json(['success' => 'Deleted Successfully !']);
        }

        return response()->json(['error' => 'Error while deleting !']);
    }
}
