<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'produto.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Alterar Produtos</title>
</head>

<body>
<?php
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        
        if(isset( $_POST['alterardados'])):
        {
                $produto = new Produto;
                $produto->setNome($nome);
                $produto->setvalor($valor);
                $produto->setquantidade($quantidade);
                $produto->update($id);

        }
        endif;
?>

        <form method="post" action="AlterarProduto.php">
                <label for='Nome'> Nome:</label>
                <input type="text" name="nome" value="<?php echo $nome;?>"/>
                <label for='valor'> valor: </label>    
                <input type="text" name="valor" value="<?php echo $valor;?>"/>
                <label for='quantidade'> quantidade: </label>    
                <input type="text" name="quantidade" value="<?php echo $quantidade;?>"/>
                <input name="id" type="hidden" value="<?php echo $id;?>"/>
                <input type="submit" name="alterardados"/>
                <a href= listarproduto.php> Lista de Produtos</a>

        </form>
        

</body>
</html>