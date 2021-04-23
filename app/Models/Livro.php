<?php

namespace App\Models;

use Core\Database;

class Livro{
    private $table = "livro";

     public function getAll(){
         $db = Database::getInstance();

         $data = $db->getList($this->table, '*');

        return $data;
     }

     public function record($data){
        $db = Database::getInstance();

        if ($data != null && !empty($data)){
            $data = [
                'Nome_Livro' => filter_var($data['nome']),
                'Ano' => $data['ano'],
                'Quant_Pag' => $data['quantidade_paginas'],
                'Edicao' =>  $data['edicao'],
                'Descricao' => $data['descricao'],
                'Idioma' =>  $data['idioma'],
                'Preço' =>  $data['valor'],
            ];
            return $db->insert($this->table, $data);
        }else{
            return false;
        }
     }
}