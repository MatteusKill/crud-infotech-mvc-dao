<?php

namespace Model;

use DAO\ClienteDAO;

class Cliente
{
    public ?int $id_cliente;
    public string $nome;
    public string $status_cliente;
    public string $telefone;
    public string $email;
    public ?string $data_cadastro;

    public static function getAllRows()
    {   
        $objCli = new ClienteDAO();
        return $objCli->select();
        // return new ClienteDAO()->select();
    }

    public static function getById()
    {   
        $objCli = new ClienteDAO();
        return $objCli->select();
        // return new ClienteDAO()->select();
    }

    public function save()
    {   

        return ClienteDAO::insert($this);
        // return new ClienteDAO()->insert();
    }
}
