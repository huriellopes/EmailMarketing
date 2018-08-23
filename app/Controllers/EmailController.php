<?php

namespace App\Controllers;

use Base\Controller\Controller;
use Base\DI\Container;

class EmailController extends Controller
{
    public function index()
    {
        $this->render("index");
    }

    public function cadEmail()
    {
    	$this->render("cadastro");
    }

    public function salva()
    {
    	$model = Container::getModel('EmailModel');

    	$nome 	= $_POST['nome'];
    	$email	= $_POST['email'];

    	$retorna =  $model->salvaEmail($nome,$email);
    	
    	return $retorna;
    }
}
