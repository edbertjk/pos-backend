<?php

namespace App\Http\Controllers;

use App\Models\Histories2;
use Illuminate\Http\Request;

class Histories2Controller extends Controller
{
    public function index()
    {
        $histories = Histories2::orderBy("created_at", "desc")->paginate(10);
        return response()->json([
            'db' => $histories,
        ]);
    }
    public function store(Request $request)
    {
        $state = Histories2::create([
            'mode' => $request->mode,
            'content' => $request->content,
            'pembayaran' => $request->pembayaran,
            'total' => $request->total,
            'uang' => $request->uang,
            'tanggal' => $request->tanggal,
            'kasir' => $request->kasir,
            'nota' => $request->nota,
        ]);
        return response()->json([  
            "data" => $state,
        ]);
    }
    public function destroy(Histories2 $histories)
    {
        $state = $histories->delete();
    }
}
