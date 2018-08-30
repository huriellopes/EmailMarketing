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

        $nome   = $_POST['nome'];
        $email  = $_POST['email'];

        $retorna =  $model->salvaEmail($nome, $email);
        return json_encode($retorna);
    }

    public function lista()
    {
        $all = Container::getModel("EmailModel");
        $this->view->email = $all->listaAll();
        $this->render("lista");
    }

    public function campanha()
    {
        $this->render("campanha");
    }

    public function enviaEmail()
    {
        $send = Container::getModel("EMailModel");

        $assunto    = $_POST['assunto'];
        $mensagem   = $_POST['mensagem'];

        $retorna = $send->SendEmail($assunto, $mensagem);

        return $retorna;
    }

    public function relatorio()
    {
        $this->render("relatorio");
    }

    public function gera()
    {
        $inicio = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['periodoDe'])));
        $ate = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['AteDe'])));

        $gera = Container::getModel("EmailModel");
        $this->view->email = $gera->Gera($inicio, $ate);
        $this->render("geraRelatorio");
    }
}
