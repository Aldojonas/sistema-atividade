<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'venda.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de Vendas</title>

</head>

<body>
   <?php
    
      $venda = new Venda;
      if(isset($_POST['cadastrar'])):
            $nota = $_POST['nota'];
            $nome = $_POST['nome'];
            $valor_total = $_POST['valor_total'];
            $valor_pago = $_POST['valor_pago'];
            $data = $_POST['data'];
            $valor_troco = $_POST['valor_troco'];

            $venda->setnota($nota);
            $venda->setnome($nome);
            $venda->setvalor_total($valor_total);
            $venda->setvalor_pago($valor_pago);
            $venda->setdata($data);
            $venda->setvalor_troco($valor_troco);

            if($venda->insert()){
                echo "Venda". $nota. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='nota'> Nota Fiscal:</label>
            <input type="text" name="nota"/>
        <label for='nome'> Nome:</label>
            <input type="text" name="nome"/>
        <label for='valor_total'> Valor_total:</label>
            <input type="text" name="valor_total"/>
        <label for='valor_pago'> valor_pago: </label>
            <input type="text" name="valor_pago"/>
        <label for='data'> Data: </label> 
            <input type="text" name="data"/>
        <label for='valor_troco'> Troco: </label> 
            <input type="text" name="valor_troco"/>
            <input type="submit" name="cadastrar"/>
    </form>

</body>
</html>