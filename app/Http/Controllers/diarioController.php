<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formularios');
        
    }

    public function metodoRecuerdos(){
        return view('memories');
    }
    
     
    public function metodoGuardar(Request $req){
        
        echo"<p>";
            echo $req->path();
            echo "-";
            echo $req->method();
            echo "-";
            echo $req->ip();
            echo ".";
            echo $req->url();
        echo"</p>";
    }
    //
}