<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Livro;
use Core\Request;
  
class LivrosController extends Controller {


    public function create(Request $request){

        if($request->isMethod('get')){
            $this->view('livro_cadastro');
        }else{
            $livroModel = new Livro();
            $resposta = $livroModel->record($request->post());
            $this->view('confirma', ['livros' => $request->post(), 'resposta' => $resposta]);
        }
    }

    public function index(){
        $livroModel = new Livro();
        $livros = $livroModel->getAll();


        $this->view('busca_livros', ['livros' => $livros]);
    }
}