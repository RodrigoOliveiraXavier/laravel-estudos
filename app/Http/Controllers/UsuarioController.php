<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        return view('Usuario.usuario');
    }
}
