<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'cliente.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de Clientes</title>

</head>

<body>
   <?php
    
      $cliente = new Cliente;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];

            $cliente->setNome($nome);
            $cliente->setcpf($cpf);
            $cliente->setrg($rg);

            if($cliente->insert()){
                echo "Cliente". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>
        <label for='cpf'> cpf: </label>    
            <input type="text" name="cpf"/>
        <label for='rg'> rg: </label>    
            <input type="text" name="rg"/>
            <input type="submit" name="cadastrar"/>
        
    </form>

</body>
</html>