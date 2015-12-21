<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\serie_exercicio;
use App\treino_dia;
use App\User;
use App\exercicio;
use Session;
class ApiController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "funciona";
    }

    public function putTreino(Request $request){

    }

    public function upload(Request $request){

    }
    public function cadastro(Request $request){
        
    }

    public function mensagens(){
        return ['status'=>'sucesso','mensagem'=>'tsteste','data'=>'2015-10-1'];
    }


}
