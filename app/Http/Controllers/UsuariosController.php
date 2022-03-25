<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
     
        return response()->json($usuarios, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsuariosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuariosRequest $request)
    {
        $request->validated();

        $usuarios = Usuarios::create([
            'nome' => $request['nome'],
            'sobrenome' => $request['sobrenome'],
            'email' => $request['email'],
            'celular' => $request['celular'],
            'password' => bcrypt($request['password']),
            'avatar_id' => $request['avatar'],
            'created_at' => now(),
        ]);

        return response()->json([
            'nome' => $usuarios['nome'],
            'sobrenome' => $usuarios['sobrenome'],
            'email' => $usuarios['email'],
            'celular' => $usuarios['celular'],
            'avatar_id' => $usuarios['avatar_id'],
            'status' => $usuarios['status'],
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuariosRequest  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuariosRequest $request, $id)
    {
        $request->validate();

        $usuarios = Usuarios::find($id);
        $usuarios->nome = $request->get('nome');
        $usuarios->sobrenome = $request->get('sobrenome');
        $usuarios->email = $request->get('email');
        $usuarios->celular = $request->get('celular');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $usuarios->avatar =  $avatarName;
        }

        $usuarios->update();
       
        return response()->json([
            'nome' => $usuarios['nome'],
            'sobrenome' => $usuarios['sobrenome'],
            'email' => $usuarios['email'],
            'celular' => $usuarios['celular'],
            'avatar_id' => $usuarios['avatar_id'],
            'status' => $usuarios['status'],
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->status = 'Inativo';

        $usuarios->update();

        return response()->json([
            'nome' => $usuarios['nome'],
            'sobrenome' => $usuarios['sobrenome'],
            'email' => $usuarios['email'],
            'celular' => $usuarios['celular'],
            'avatar_id' => $usuarios['avatar_id'],
            'status' => $usuarios['status'],
        ], 200);
    }
}
