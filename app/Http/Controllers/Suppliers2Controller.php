<?php

namespace App\Http\Controllers;

use App\Models\Suppliers2;
use App\Models\Categories2;
use Illuminate\Http\Request;

class Suppliers2Controller extends Controller
{
    public function index()
    {
        $suppliers = Suppliers2::get();
        $category = Categories2::get();
        return view('toko2.supplier.index', [
            'suppliers' => $suppliers,
            'category' => $category,
        ]);
    }
    public function create()
    {
        $category = Categories2::get();
        return view('toko2.supplier.create', [
            'categories' => $category
        ]);
    }
    public function store(Request $request)
    {
        if($request->perusahaan == "" || $request->perusahaan == null) $request->perusahaan = "NONE";
        $state = Suppliers2::create([
            'name' => $request->name,
            'perusahaan' => $request->perusahaan,
            'nomor_telp' => $request->nomortelp,
            'kategori' => $request->kategori,
            'alamat' => $request->alamat,
        ]);

        if($state){
            return redirect("/toko2/suppliers");
        }
    }
    public function edit(Suppliers2 $supplier)
    {
        $category = Categories2::get();
        return view('toko2.supplier.edit', [
            'suppliers' => $supplier,
            'categories' => $category,
        ]);
    }
    public function update(Request $request, Suppliers2 $supplier)
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
            return redirect('/toko2/suppliers');
        }
    }
    public function destroy(Suppliers2 $supplier)
    {
        $state = $supplier->delete();
        
        if($state){
            return redirect("/toko2/suppliers");
        }
    }
}
