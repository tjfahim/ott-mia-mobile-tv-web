<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Session;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        $page_title = "Categories List";

        $categories = Category::all();

        return view('admin.pages.categories.index', [
            'page_title' => $page_title,
            'categories' => $categories
        ]);
    }


    public function create()
    {
        $page_title = "Add Categories";

        return view('admin.pages.categories.create', [
            'page_title' => $page_title
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'image' => ['required']

        ]);


        if ($request->hasFile('image') && $request->file('image')->isValid()) {


            $image = $request->file('image');


            $imageName = time() . '.' . $image->getClientOriginalExtension();


            $image->move(public_path('upload/source'), $imageName);


            $attributes['image'] = $imageName;
        }


        $category = Category::create($attributes);


        if ($category) {
            Session::flash('flash_message', 'Category successfully added');
            return redirect('admin/categories');
        }


        return redirect()->back()->with('error', 'There was an issue creating the member.');
    }

    public function edit(Category $category)
    {
        return view('admin.pages.categories.edit', [
            'page_title' => 'Edit Category',
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'name' => ['required'],
        ]);








        if ($request->hasFile('image') && $request->file('image')->isValid()) {


            if (file_exists(public_path('upload/source/' . $category->image))) {
                unlink(public_path('upload/source/' . $category->image));
            }


            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload/source'), $imageName);

            $attributes['image'] = $imageName;
        }





        $category = $category->update($attributes);


        if ($category) {
            Session::flash('flash_message', 'Category update  successfully ');
            return redirect('admin/categories');
        }


        return redirect()->back()->with('error', 'There was an issue creating the member.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        Session::flash('flash_message', trans('words.deleted'));
        return redirect()->back();
    }
}
