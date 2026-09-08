<?php

namespace DAO;

class ClienteDAO extends DAO 
{
    public function __construct(){
        
        parent::__construct();
    }

    public static function select()
    {
        $sql = "SELECT * FROM cliente";
        $stmt = parent::$connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "Model\Cliente");
    }

    public function insert(Cliente $model)
    {
        $sql = "INSERT INTO cliente (nome,status_cliente,endereco) VALUES (?,?,?)";
        $stmt = parent::$connection->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->status_cliente);
        $stmt->bindValue(1, $model->endereco);
        $stmt->execute();

        $model->id_cliente = parent::$connection->lastInsertId();
        return $model;
    }

    public static function update()
    {
        $sql = "UPDATE dhaskhdkshadhsak";
        $stmt = parent::$connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "Model\Cliente");
    }

}

