<?php

namespace App\Models;

use Base\Model\Model;
use Base\Email\Email;

class EmailModel extends Model
{
    public function listaAll()
    {
        return $this->all("emails");
    }

    // Aqui
    public function salvaEmail($nome, $email)
    {
        return $this->save("emails", compact('nome', 'email'));
    }

    public function SendEmail($assunto, $mensagem)
    {
        $total = $this->all("emails");
        foreach ($total as $emails) {
            Email::EnviaEmail($emails['email'], $emails['nome'], $assunto, $mensagem);
            sleep(1);
        }
    }

    public function Gera($inicio, $ate)
    {
        return $this->find("email_cad", 'DATE_FORMAT(cadastro,"%d/%m/%Y") as cadastro', $inicio, $ate);
    }
}
