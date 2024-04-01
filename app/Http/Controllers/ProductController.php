<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use App\Models\Suppliers;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        //
        $product = Product::get();
        return view('product', [
            'products' => $product 
        ]);
    }
    public function create()
    {
        $category = Categories::get();
        $supplier = Suppliers::get();
        return view('create', [
            'categories' => $category,
            'suppliers' => $supplier
        ]);
    }
    public function store(Request $request)
    {
     

        $state = Product::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'jumlah' => $request->jumlah,
            'supplier_name' => $request->supplier_name,
        ]);

        if($state){
            return redirect("/product");
        }
    }
    public function edit(Product $product)
    {
        $category = Categories::get();
        $supplier = Suppliers::get();
        return view('edit', [
            'products' => $product,
            'categories' => $category,
            'suppliers' => $supplier
        ]);
    }
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nama' => "required",
            'kategori' => "required",
            'harga_beli' => "required",
            'harga_jual' => "required",
            'jumlah' => "required",
            'supplier_name' => "required"
        ]);

        $state = $product->update($validated);

        if ($state) {
            return redirect('/product');
        }
    }
    public function destroy(Product $product)
    {
        $state = $product->delete();
        if($state){
            return redirect("/product");
        }
    }
}
