<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        if(request()->ajax()) {
            $categories->transform(function ($category) {
                $image_url = '';
                if ($category->getFirstMediaUrl('default')) {
                    $image_url = $category->getFirstMedia('default')->getUrl();
                }
                $category['image'] = $image_url;
                return $category;
            });
            return response()->json($categories);
        }
        return view('backend.categories.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = Category::create($request->all());
        if ($cat && $request->hasFile('image')) {
            $cat->image = "";
            $media = $cat->addMedia($request->file('image'))
            ->toMediaCollection();
            $image_url = $media->getUrl();
            $cat->image = $image_url;
        }
        return redirect()->route('catagory.index');
        // return response()->json($cat);
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category_id)
    {
        $category = Category::find($category_id);
        $category->delete();
        return response()->json(true);
    }
}
