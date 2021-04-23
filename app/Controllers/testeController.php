<?php

namespace App\Controllers;

use Core\Controller;
  
class TesteController extends Controller {

    public function index(){
        $title = "An interesting title";
        $content = "sei lá";
        $content2 = "More interesting content blablabla blablabla blablabla
        blablabla";

        $show = ['title' => $title, 'content' => $content, 'content2' => $content2];

        $this->view('teste', $show);
    }
}