<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Categories::get();
        return view('categories.index', [
            'category' => $category 
        ]);
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $state = Categories::create([
            'nama' => $request->nama,
        ]);

        if($state){
            return redirect("/categories");
        }
    }
    public function edit(Categories $category)
    {
        return view('categories.edit', [
            'categories' => $category,
        ]);
    }
    public function update(Request $request, Categories $category)
    {
        $validated = $request->validate([
            'nama' => "required",
        ]);

        $state = $category->update($validated);

        if ($state) {
            return redirect('/categories');
        }
    }
    public function destroy(Categories $category)
    {
        $state = $category->delete();
        
        if($state){
            return redirect("/categories");
        }
    }
}
