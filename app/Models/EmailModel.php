<?php

namespace App\Models;

use Base\Model\Model;

class EmailModel extends Model
{
    public function lista()
    {
        return $this->all("emails");
    }

    public function salvaEmail($nome, $email)
    {
    	return $this->save("emails", $nome, $email);
    }
}
