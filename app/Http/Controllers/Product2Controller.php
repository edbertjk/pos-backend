<?php

namespace App\Http\Controllers;

use App\Models\Product2;
use App\Models\Categories2;
use App\Models\Suppliers2;
use Illuminate\Http\Request;


class Product2Controller extends Controller
{
    public function index()
    {
        //
        $product = Product2::get();
        return view('toko2.product', [
            'products' => $product 
        ]);
    }
    public function create()
    {
        $category = Categories2::get();
        $supplier = Suppliers2::get();
        return view('toko2.create', [
            'categories' => $category,
            'suppliers' => $supplier
        ]);
    }
    public function store(Request $request)
    {
     

        $state = Product2::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'jumlah' => $request->jumlah,
            'supplier_name' => $request->supplier_name,
        ]);

        if($state){
            return redirect("/toko2/product");
        }
    }
    public function edit(Product2 $product)
    {
        $category = Categories2::get();
        $supplier = Suppliers2::get();
        return view('toko2.edit', [
            'products' => $product,
            'categories' => $category,
            'suppliers' => $supplier
        ]);
    }
    public function update(Request $request, Product2 $product)
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
            return redirect('/toko2/product');
        }
    }
    public function destroy(Product2 $product)
    {
        $state = $product->delete();
        if($state){
            return redirect("/toko2/product");
        }
    }
}
