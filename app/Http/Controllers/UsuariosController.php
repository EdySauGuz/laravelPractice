<?php

namespace App\Http\Controllers;

use App\Pro_usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Pro_usuarios::all();
        return view('index', compact('usuarios'));
    }
}
