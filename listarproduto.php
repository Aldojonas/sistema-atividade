<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'produto.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de Produtos</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $produto=New Produto;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $produto->delete($id);
                    }
                    
                    //adicionar produto no carrinho
                    if(isset($_POST['carrinho'])){ 
                        $id = $_POST['id'];
                    }
                                                         
                    
                    

                    foreach ($produto->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->id;?> </td>
                        
                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->valor;?> </td>

                        <td> <?php echo $value->quantidade;?> </td>

                        <td>

                            <form method="post" action="alterarproduto.php">
                                    <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                                    <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                    <input name="valor" type="hidden" value="<?php echo $value->valor;?>"/>
                                    <input name="quantidade" type="hidden" value="<?php echo $value->quantidade;?>"/>

                                    <button name="alterar" type="submit">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>

                            </form>
                        </td>

                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="carrinho" type="submit" >Adiconar no carrinho</button>
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