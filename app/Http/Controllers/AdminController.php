<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CategoryRequest;

class AdminController extends Controller
{
    public function categoriesList()
    {
        $categories = Category::latest()->get();
        return view('admin.Category.index', compact('categories'));
    }

    public function categorySave(CategoryRequest $request)
    {
        try {
            $savecategory = new Category();
            $savecategory->title = $request->title;
            $savecategory->description = $request->description;
            $savecategory->save();

            return back()->with('success', 'Category Saved Successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function categoryDestroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
            return back()->with('success', 'Category deleted successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function categoryEdit(Category $category)
    {
        return response()->json($category);
    }

    public function categoryUpdate(CategoryRequest $request, Category $category)
    {
        try {
            $category->update($request->validated());
            return redirect()->route('categories')->with('success', 'Category updated successfully.');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('categories')->with('error', 'Something went wrong.');
        }
    }
}
