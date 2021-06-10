<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'venda.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de Vendas</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>id</th>
                        <th>Nota Fiscal</th>
                        <th>Nome</th>
                        <th>valor_total</th>
                        <th>valor_pago</th>
                        <th>data</th>
                        <th>valor_troco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $venda=New Venda;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $venda->delete($id);
                    }
                                                         
                    
                    

                    foreach ($venda->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->id;?> </td>

                        <td> <?php echo $value->nota;?> </td>

                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->valor_total;?> </td>

                        <td> <?php echo $value->valor_pago;?> </td>

                        <td> <?php echo $value->data;?> </td>

                        <td> <?php echo $value->valor_troco;?> </td>

                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                <?php } ?>    
                </tbody>
            </table>
            <!-- Fim da tabela -->




    </form>

</body>
</html>