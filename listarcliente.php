<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'cliente.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de Clientes</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>id</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $cliente=New Cliente;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $cliente->delete($id);
                    }
                                                         
                    
                    

                    foreach ($cliente->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->id;?> </td>

                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->cpf;?> </td>

                        <td> <?php echo $value->rg;?> </td>

                        <td>

                            <form method="post" action="AlterarCliente.php">
                                    <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                                    <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                    <input name="cpf" type="hidden" value="<?php echo $value->cpf;?>"/>
                                    <input name="rg" type="hidden" value="<?php echo $value->rg;?>"/>

                                    <button name="alterar" type="submit">Alterar</button>
                            </form>
                        </td>
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