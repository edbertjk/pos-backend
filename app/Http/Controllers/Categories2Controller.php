<?php

namespace App\Http\Controllers;

use App\Models\Categories2;
use Illuminate\Http\Request;

class Categories2Controller extends Controller
{
    public function index()
    {
        $category = Categories2::get();
        return view('toko2.categories.index', [
            'category' => $category 
        ]);
    }
    public function create()
    {
        return view('toko2.categories.create');
    }
    public function store(Request $request)
    {
        $state = Categories2::create([
            'nama' => $request->nama,
        ]);

        if($state){
            return redirect("/toko2/categories");
        }
    }
    public function edit(Categories2 $category)
    {
        return view('toko2.categories.edit', [
            'categories' => $category,
        ]);
    }
    public function update(Request $request, Categories2 $category)
    {
        $validated = $request->validate([
            'nama' => "required",
        ]);

        $state = $category->update($validated);

        if ($state) {
            return redirect('/toko2/categories');
        }
    }
    public function destroy(Categories2 $category)
    {
        $state = $category->delete();
        
        if($state){
            return redirect("/toko2/categories");
        }
    }
}
