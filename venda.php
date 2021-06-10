<?php

/*
 * contem metodos basicos para criar, deletar, LÃª e apagar dados no BD
 */

require_once 'CrudLoja.php';

 class Venda extends CrudLoja {
    
    protected $tabela = 'venda';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nota, nome, valor_total, valor_pago, valor_troco, data) VALUES (:nota, :nome,:valor_total, :valor_pago, :valor_troco, :data)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nota', $this->nota);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':valor_total', $this->valor_total);
        $stm->bindParam(':valor_pago', $this->valor_pago);
        $stm->bindParam(':valor_troco', $this->valor_troco);
        $stm->bindParam(':data', $this->data);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nota = :nota, nome = :nome, valor_total = :valor_total, valor_pago = :valor_pago, valor_troco,  = :valor_troco, data = :data  WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nota', $this->nota);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':valor_total', $this->valor_total);
        $stm->bindParam(':valor_pago', $this->valor_pago);
        $stm->bindParam(':valor_troco', $this->valor_troco);
        $stm->bindParam(':data', $this->data);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}