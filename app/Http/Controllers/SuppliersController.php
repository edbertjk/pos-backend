<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use App\Models\Categories;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::get();
        $category = Categories::get();
        return view('supplier.index', [
            'suppliers' => $suppliers,
            'category' => $category,
        ]);
    }
    public function create()
    {
        $category = Categories::get();
        return view('supplier.create', [
            'categories' => $category
        ]);
    }
    public function store(Request $request)
    {
        if($request->perusahaan == "" || $request->perusahaan == null) $request->perusahaan = "NONE";
        $state = Suppliers::create([
            'name' => $request->name,
            'perusahaan' => $request->perusahaan,
            'nomor_telp' => $request->nomortelp,
            'kategori' => $request->kategori,
            'alamat' => $request->alamat,
        ]);

        if($state){
            return redirect("/suppliers");
        }
    }
    public function edit(Suppliers $supplier)
    {
        $category = Categories::get();
        return view('supplier.edit', [
            'suppliers' => $supplier,
            'categories' => $category,
        ]);
    }
    public function update(Request $request, Suppliers $supplier)
    {
        
        $validated = $request->validate([
            'name' => "required",
            'perusahaan' => "required",
            'nomor_telp' => "required",
            'kategori' => "required",
            'alamat' => "required"
        ]);

        $state = $supplier->update($validated);

        if ($state) {
            return redirect('/suppliers');
        }
    }
    public function destroy(Suppliers $supplier)
    {
        $state = $supplier->delete();
        
        if($state){
            return redirect("/suppliers");
        }
    }
}
