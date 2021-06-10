<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'produto.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de Produtos</title>

</head>

<body>
   <?php
    
      $produto = new Produto;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $valor = $_POST['valor'];
            $quantidade = $_POST['quantidade'];

            $produto->setNome($nome);
            $produto->setvalor($valor);
            $produto->setquantidade($quantidade);

            if($produto->insert()){
                echo "Produtos". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
    <label for='Nome'> Nome:</label>
    	<input type="text" name="nome"/>
    <label for='valor'> Valor: </label>    
    	<input type="text" name="valor"/>
    <label for='quantidade'> Quantidade: </label>    
    	<input type="text" name="quantidade"/>
    	 <input type="submit" name="cadastrar"/>
        
    </form>

</body>
</html>