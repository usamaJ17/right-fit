<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $sub_categories = SubCategory::with('category')->get();
        if(isset($request->type) && $request->type =='raw' ) {
            return response()->json($sub_categories);
        }
        return view('backend.sub_categories.index')->with(compact('categories','sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = SubCategory::all();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = SubCategory::create($request->all());
        // if ($cat && $request->hasFile('image')) {
        //     $cat->image = "";
        //     $media = $cat->addMedia($request->file('image'))
        //     ->toMediaCollection();
        //     $image_url = $media->getUrl();
        //     $cat->image = $image_url;
        // }
        return redirect()->route('sub-catagory.index');
        // return response()->json($cat);
    }
    /**
     * Display the specified resource.
     */
    public function show(SubCategory $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category_id)
    {
        $category = SubCategory::find($category_id);
        $category->delete();
        return response()->json(true);
    }
}
