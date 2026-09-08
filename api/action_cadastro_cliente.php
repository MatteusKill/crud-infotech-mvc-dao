<?php

header('Content-Type: application/json');

$resposta = true;
$array = [];

if($resposta == true){
    $array = [
        "status" => 200,
        "msg" => "Ação realizada com sucesso"
    ];
}else{
    $array = [
        "status" => 400,
        "msg" => "ocorreu um erro ao tentar realizar a sua solicitação"
    ];
};

echo json_encode($array);