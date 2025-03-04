<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Categoria::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'codigo' => 'required|string|max:10|unique:categorias,codigo',
            'descripcion' => 'required|string|max:40',
            'activo' => 'boolean'
        ]);

        $categoria = Categoria::create($request->all());

        return response()->json([
            'message' => 'Categoría creada',
            'categoria' => $categoria
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Categoria::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return Categoria::destroy($id);
    }
}
