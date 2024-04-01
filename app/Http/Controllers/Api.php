<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\Product2;
use App\Models\Categories2;
use App\Models\Suppliers2;
use App\Models\Histories;

use Illuminate\Http\Request;


class Api extends Controller
{
    public function listprod()
    {
        $products = Product::orderBy("nama", "asc")->paginate(10);
        return response()->json([
            'db' => $products,
        ]);
    }
    public function listcat()
    {
        $category = Categories::orderBy("nama", "asc")->paginate(10);
        return response()->json([
            'db' => $category,
        ]);
    }
    public function listsup()
    {
        $suppliers = Suppliers::paginate(10);
        return response()->json([
            'db' => $suppliers,
        ]);
    }
    public function listprod2()
    {
        $products = Product2::orderBy("nama", "asc")->paginate(10);
        return response()->json([
            'db' => $products,
        ]);
    }
    public function listcat2()
    {
        $category = Categories2::orderBy("nama", "asc")->paginate(10);
        return response()->json([
            'db' => $category,
        ]);
    }
    public function listsup2()
    {
        $suppliers = Suppliers2::paginate(10);
        return response()->json([
            'db' => $suppliers,
        ]);
    }
    public function listprodcat(Request $request)
    {
        $validated = $request->validate([
            'category' => "required",
        ]);
        
        $categories = Categories::query()
        ->where('nama', 'LIKE', "%{$validated}%")
        ->get();

        return response()->json([
            'db' => $categories,
        ]);
    }
}
