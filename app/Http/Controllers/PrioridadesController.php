<?php

namespace App\Http\Controllers;

use App\Models\Prioridades;
use App\Http\Requests\StorePrioridadesRequest;
use App\Http\Requests\UpdatePrioridadesRequest;

class PrioridadesController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prioridades = Prioridades::all();

        return response()->json($prioridades, 200);
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrioridadesRequest $request)
    {
        $request->validated();

        $prioridade = Prioridades::create([
            'hash' => md5(sha1(sha1(uniqid() . uniqid() . date('YmdHisu') . uniqid()))),
            'nome_prioridade' => $request['nome_prioridade'],
            'data_limite_atendimento' => $request['data_limite_atendimento'],
            'cor_prioridade' => $request['cor_prioridade'],
            'ordenacao' => $request['ordenacao'],
            'created_at' => now(),
        ]);

        return response()->json($prioridade, 200);
    }


    public function search($id)
    {
        $prioridades = Prioridades::find($id);

        return response()->json($prioridades, 200);
    }

    /**
     * Update the specified resource in storage. 
     */
    public function update(UpdatePrioridadesRequest $request, $id)
    {
        $request->validated();

        $prioridades = Prioridades::find($id);
        $prioridades->nome_prioridade = $request->get('nome_prioridade');
        $prioridades->ordenacao= $request->get('ordenacao');
        $prioridades->data_limite_atendimento = $request->get('data_limite');
        $prioridades->cor_prioridade = $request->get('cor_prioridade');
        $prioridades->updated_at = now();

        $prioridades->update();

        return response()->json([
            'nome_prioridade' => $prioridades['nome_prioridade'],
            'data_limite_atendimento' => $request['data_limite'],
            'ordenacao' => $prioridades['ordenacao'],
            'cor_prioridade' => $prioridades['cor_prioridade'],
        ], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $usuarios
     */
    public function destroy($id)
    {
        $prioridade = Prioridades::find($id);
        $prioridade->status = 'Inativo';

        $prioridade->update();
        
        return response()->json($prioridade, 200);
    }
}
