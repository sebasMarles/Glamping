<?php

namespace App\Http\Controllers;

use App\Models\Cabin;
use Illuminate\Http\Request;

class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "hola mundo";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cabin = Cabin::create($request->all());

        return response()->json(['data' => $cabin], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cabin $cabin)
    {
        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cabin $cabin)
    {
        $cabin->update($request->all());

        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cabin $cabin)
    {
        $cabin->delete();

        return response()->json(null, 204);
    }
}
