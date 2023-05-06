<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PosPendakian;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class PosPendakianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posPendakian = PosPendakian::all();
        return response()->json($posPendakian);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'luas_pos' => 'required',
            'is_warung' => 'required',
            'is_toilet' => 'required'
        ]);
        $data = new PosPendakian();
        $data->nama = $validatedData['nama'];
        $data->luas_pos = $validatedData['luas_pos'];
        $data->is_warung = $validatedData['is_warung'];
        $data->is_toilet = $validatedData['is_toilet'];
        $data->save();
        return response()->json([
            'message' => 'berhasil upload data',
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'string|max:120',
            'luas_pos' => 'integer',
            'is_warung' => 'boolean',
            'is_toilet' => 'boolean',
        ]);
        $posPendakian = PosPendakian::find($id);
        if (!$posPendakian) {
            return response()->json(['message' => 'data ngga ada']);
        }
        if(isset($validatedData['nama'])){
            $posPendakian->nama = $validatedData['nama'];
        }
        if(isset($validatedData['luas_pos'])){
            $posPendakian->luas_pos = $validatedData['luas_pos'];
        }
        if(isset($validatedData['is_warung'])){
            $posPendakian->is_warung = $validatedData['is_warung'];
        }
        if(isset($validatedData['is_toilet'])){
            $posPendakian->is_toilet = $validatedData['is_toilet'];
        }

        $posPendakian->save();
        return response()->json([
            'message' => 'berhasi',
            'data' => $posPendakian
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posPendakian = PosPendakian::find($id);
        if(!$posPendakian){
            return response()->json([
                'message' => 'data tidak ditemukan'
            ]);
        }
        $posPendakian->destroy($id);
        return response()->json([
            'message' => 'data berhasil dihapus'
        ]);
    }
}
