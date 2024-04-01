<?php

namespace App\Http\Controllers;

use App\Models\Histories;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    public function index()
    {
        $histories = Histories::orderBy("created_at", "desc")->paginate(10);
        return response()->json([
            'db' => $histories,
        ]);
    }
    public function store(Request $request)
    {
        $state = Histories::create([
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
    public function destroy(Histories $histories)
    {
        $state = $histories->delete();
    }
}
