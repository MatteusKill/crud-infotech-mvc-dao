<?php
    include VIEW . "/Includes/header.php";
    include VIEW . "/Includes/navbar.php";
?>

<div class="p-5 center">
    <h1> Clientes Cadastrados </h1>
</div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
   <?php
        foreach($dadosClientes as $cliente):
            echo ' <tr>
                        <th scope="row"> '.$cliente->id_cliente.'  </th>
                        <td> '.$cliente->nome.'  </td>
                        <td> '.$cliente->telefone.'  </td>
                        <td>  '.$cliente->email.'  </td>
                        <td>  '.$cliente->status_cliente.'  </td>
                        <td>  Editar  </td>
                    </tr>';
        endforeach;
   ?>
  </tbody>
</table>

<?php
   include VIEW . "/Includes/footer.php";
?>