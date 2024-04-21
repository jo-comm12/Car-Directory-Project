<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }



    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|min:3|max:255|string',
            'description' => 'required|max:255|string',
            'plate' => 'required|max:255|string'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'plate' => $request->plate,
        ]);

        return redirect('categories/create')->with('status','Car Created');
    }

    public function users()
    {
        $users = Users::get();
        return view('users', compact('users'));
    }

    public function edit (int $id)
    {
        $category = Category::findOrFail($id);
        // return $category;
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
            'description' => 'required|max:255|string',
            'plate' => 'required|max:255|string'
        ]);

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'plate' => $request->plate,
        ]);

        return redirect()->back()->with('status','Car Updated');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('status','Car Deleted');

    }


}