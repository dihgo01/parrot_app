<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketsRequest;
use App\Http\Requests\UpdateTicketsRequest;
use App\Models\Tickets;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Tickets::all();

        return response()->json($tickets, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketsRequest $request)
    {
        $request->validated();

        $tickets = Tickets::create([
            'usuario_id' => $request['usuario_id'],
            'categoria_id' => $request['categoria_id'],
            'prioridade_id' => $request['prioridade_id'],
            'previsao_solucao' => $request['previsao_solucao'],
            'titulo' => $request['titulo'],
            'descricao' => $request['descricao'],
            'tipo' => $request['tipo'],
            'data_finalizacao' => $request['data_finalizacao'],
            'data_cancelamento' => $request['data_cancelamento'],
            'status_ticket' => $request['status_ticket'],
            'status' => 'Ativo',
            'created_at' => now(),
        ]);

        $message = 'ticket criado com sucesso!';
        return view('tickets',$message );
        return response()->json($tickets, 200);
    }

    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketsRequest $request, $id)
    {
        $request->validated();

        $tickets = Tickets::find($id);
        $tickets->usuario_id = $request->get('usuario_id');
        $tickets->categoria_id = $request->get('categoria_id');
        $tickets->prioridade_id = $request->get('prioridade_id');
        $tickets->previsao_solucao = $request->get('previsao_solucao');
        $tickets->titulo = $request->get('titulo');
        $tickets->descricao = $request->get('descricao');
        $tickets->data_finalizacao = $request->get('data_finalizacao');
        $tickets->data_cancelamento = $request->get('data_cancelamento');
        $tickets->status_ticket = $request->get('status_ticket');
 
        $tickets->update();
        return response()->json([
            'usuario_id' => $tickets['usuario_id'],
            'categoria_id' => $tickets['categoria_id'],
            'prioridade_id' => $tickets['prioridade_id'],
            'previsao_solucao' => $tickets['previsao_solucao'],
            'titulo' => $tickets['titulo'],
            'descricao' => $tickets['descricao'],
            'data_finalizacao' => $tickets['data_finalizacao'],
            'data_cancelamento' => $tickets['data_cancelamento'],
            'status_ticket' => $tickets['status_ticket'],
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tickets = Tickets::find($id);
        $tickets->status = 'Inativo';

        $tickets->update();
        return response()->json([
            'usuario_id' => $tickets['usuario_id'],
            'categoria_id' => $tickets['categoria_id'],
            'prioridade_id' => $tickets['prioridade_id'],
            'previsao_solucao' => $tickets['previsao_solucao'],
            'titulo' => $tickets['titulo'],
            'descricao' => $tickets['descricao'],
            'data_finalizacao' => $tickets['data_finalizacao'],
            'data_cancelamento' => $tickets['data_cancelamento'],
            'status_ticket' => $tickets['status_ticket'],
        ], 200);
    }
}
