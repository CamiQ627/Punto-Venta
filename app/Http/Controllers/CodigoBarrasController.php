<?php

namespace App\Http\Controllers;

use App\Models\CodigoBarras;
use Illuminate\Http\Request;

class CodigoBarrasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CodigoBarras::with('producto')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'codigo' => 'required|string|max:20|unique:codigos_barras,codigo',
            'producto_id' => 'required|exists:productos,id',
            'activo' => 'boolean'
        ]);

        return CodigoBarras::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return CodigoBarras::with('producto')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $codigoBarras = CodigoBarras::findOrFail($id);
        $codigoBarras->update($request->all());

        return $codigoBarras;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return CodigoBarras::destroy($id);
    }
}
