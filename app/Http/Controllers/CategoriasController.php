<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Categorias::all();

        return response()->json($usuarios, 200);
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriasRequest $request)
    {
        $request->validated();

        $usuarios = Categorias::create([
            'nome_categoria' => $request['nome_categoria'],
            'id_pai' => $request['id_pai'],
            'cor_categoria' => $request['cor_categoria'],
            'data_limite_atendimento' => $request['data_limite_atendimento'],
            'status' => 'Ativo',
            'created_at' => now(),
        ]);

        return response()->json($usuarios, 200);
    }

    /**
     * Update the specified resource in storage.
     * @param  \App\Models\Categorias  
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriasRequest $request, $id)
    {
        $request->validated();

        $categoria = Categorias::find($id);
        $categoria->nome_categoria = $request->get('nome_categoria');
        $categoria->id_pai = $request->get('id_pai');
        $categoria->cor_categoria = $request->get('cor_categoria');
        $categoria->data_limite_atendimento = $request->get('data_limite');
        $categoria->update();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $usuarios
     */
    public function destroy($id)
    {
        $usuarios = Categorias::find($id);
        $usuarios->status = 'Inativos';

        $usuarios->update();
        
        return response()->json($usuarios, 200);
    }
}

