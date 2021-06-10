<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'cliente.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Alterar Cliente</title>
</head>

<body>
<?php
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        
        if(isset( $_POST['alterardados'])):
        {
                $cliente = new Cliente;
                $cliente->setNome($nome);
                $cliente->setcpf($cpf);
                $cliente->setrg($rg);
                $cliente->update($id);

        }
        endif;
?>

        <form method="post" action="AlterarCliente.php">
                <label for='Nome'> Nome:</label>
                <input type="text" name="nome" value="<?php echo $nome;?>"/>
                <label for='cpf'> cpf: </label>    
                <input type="text" name="cpf" value="<?php echo $cpf;?>"/>
                <label for='rg'> rg: </label>    
                <input type="text" name="rg" value="<?php echo $rg;?>"/>
                <input name="id" type="hidden" value="<?php echo $id;?>"/>
                <input type="submit" name="alterardados"/>
                <a href= listarcliente.php> Lista de Clientes</a>

        </form>
        

</body>
</html>