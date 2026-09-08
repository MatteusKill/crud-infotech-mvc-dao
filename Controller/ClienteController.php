<?php

namespace Controller;

use Model\Cliente;

class ClienteController
{

    public static function index() //TODOS OS CLIENTES
    {
        $dadosClientes = Cliente::getAllRows(); //pega os dados da model
        include VIEW . '/Cliente/listar_clientes.php';
    }

    public static function cadastro() //ENVIAR OS DADOS RECEBIDOS VIA POST
    {
     
        if($_SERVER['REQUEST_METHOD'] === "POST")
        {
            $model = new Cliente();

            $nome = $_POST['nome'];
            $status = $_POST['status'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $model->nome = $nome;
            $model->status_cliente = $status;
            $model->telefone = $telefone;
            $model->email = $email;
            // print_r($model);
            // exit;
            $model = $model->save();
            print_r($model);
            exit;
        }
        else{
            // echo "CHEGUEI NO METODO CADASTRAR";
            include VIEW . '/Cliente/cadastrar_cliente.php';
        }

    }
}