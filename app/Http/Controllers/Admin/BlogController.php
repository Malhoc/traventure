<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('adminpanel.pages.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|unique:blogs,title',
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'author_name' => 'string|nullable',
            'image' => 'file|nullable',
            'blog_category_id' => 'integer|nullable',
            // 'user_id' => 'integer|required',
        ]);

         $inputs = $request->all();
         $inputs['slug'] = Str::slug($request->title);
        if ($request->hasFile('thumbnail')) {
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailPath = $thumbnailFile->store('blogs','public');
            $inputs['thumbnail'] = $thumbnailPath;
        }

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imagePath = $imageFile->store('blogs','public');
            $inputs['image'] = $imagePath;
        }


        Blog::create($inputs);

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view("adminpanel.pages.blogs.edit", compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|unique:blogs,title,'. $id,
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'author_name' => 'string|nullable',
            'image' => 'file|nullable',
            'blog_category_id' => 'integer|nullable',

        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->summary = $request->summary;
        $blog->description = $request->description;
        $blog->author_name = $request->author_name;
        if ($request->hasFile('thumbnail')) {
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailPath = $thumbnailFile->store('blogs','public');
            $blog->thumbnail =  $thumbnailPath;
        }
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imagePath = $imageFile->store('blogs','public');
            $blog->image = $imagePath;
        }
        $blog->meta_tag_title = $request->meta_tag_title;
        $blog->meta_tag_keywords = $request->meta_tag_keywords;
        $blog->meta_tag_description = $request->meta_tag_description;
        $blog->save();
        return redirect()->route('admin.blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
