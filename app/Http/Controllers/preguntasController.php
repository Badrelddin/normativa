<?php

namespace App\Http\Controllers;

use App\Models\preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class preguntasController extends Controller
{
    public function index(){
        $datos = preguntas::all();
        return view('faqs', compact('datos'));
    }

    public function show(Request $req){
        $datos = preguntas::all()->find($req->id);

        //dd($datos);
        return view('editFaqs', compact('datos'));
    }

    public function update(Request $req){


        DB::table('preguntas')
        ->where('id', $req->id)  
        ->limit(1)  
        ->update(array('titulo' => $req->titulo, "descripcion" =>$req->descripcion , "respuesta" => $req->respuesta ));   

        $datos = preguntas::all();
        return view('faqs',compact('datos'));
    }

    public function delete(Request $req){
 
        $pregunta = preguntas::find($req->id);
        $pregunta->delete();
        $datos = preguntas::all();

        return view('faqs',compact('datos'));
    }
    public function create(Request $req){
        $dat = ["titulo" => $req->titulo, "descripcion" =>$req->descripcion , "respuesta" => $req->respuesta];
        $pregunta = preguntas::create($dat);
        $pregunta->save();

        $datos = preguntas::all();

        return view('faqs',compact('datos'));
    }
}
