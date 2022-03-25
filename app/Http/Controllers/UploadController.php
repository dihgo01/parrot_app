<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Uploads;

class UploadController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
        }

        $arquivos = Uploads::create([
            'nome' => $avatarName,
            'path' => $avatarPath . $avatarName,
            'status' => 'Ativo',
            'created_at' => now(),
        ]);

        return response()->json($arquivos['id'], 200);
    }
}
