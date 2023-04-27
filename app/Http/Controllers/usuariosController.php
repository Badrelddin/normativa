<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function index(Request $req){
        $datos = ["email" => $req->email, "rol" => $req->rol];
    }
}
