<?php

namespace App\Http\Controllers;

class RouteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function tickets()
    {
        return view('tickets');
        /*
        if (view()->exists('tickets.'.$request->path())) {
            return view('tickets.'.$request->path());
        } else {
            return redirect()->route('dashboard');
        }
        */ 
    }
    public function ticketsCadastro()
    {
        return view('tickets-cadastro');
    }

    public function categorias()
    {
        return view('categorias');
    }

    public function categoriasCadastro()
    {
        return view('categorias-cadastro');
    }

    public function prioridades()
    {
        return view('prioridades');
    }

    public function prioridadesCadastro()
    {
        return view('prioridades-cadastro');
    } 

    public function pesquisaSatisfacao()
    {
        return view('pesquisa-satisfacao');
    }
}
