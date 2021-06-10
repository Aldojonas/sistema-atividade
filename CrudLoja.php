<?php

require_once 'DB.php';    //inclui arquivo DB

 abstract class CrudLoja extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $id;
    public $nome;
    public $cpf;
    public $rg;
    public $valor;
    public $quantidade;
    public $valor_total;
    public $valor_troco;
    public $data;
    public $valor_pago;
    public $preco_unitario;
    public $nota;

    public function setid($id) {
        $this->id = $id;
    }
    public function getid() {
        return $this->id;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    
    public function setcpf($cpf) {
        $this->cpf = $cpf;
    }
    public function getcpf() {
        return $this->cpf;
    }
    
    public function setrg($rg) {
        $this->rg = $rg;
    }
    public function getrg() {
        return $this->rg;
    }

    public function setvalor($valor) {
        $this->valor = $valor;
    }
    public function getvalor() {
        return $this->valor;
    }

    public function setquantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    public function getquantidade() {
        return $this->quantidade;
    }

    public function setvalor_total($valor_total) {
        $this->valor_total = $valor_total;
    }
    public function getvalor_total() {
        return $this->valor_total;
    }
    
    public function setvalor_troco($valor_troco) {
        $this->valor_troco = $valor_troco;
    }
    public function getvalor_troco() {
        return $this->valor_troco;
    }

    public function setdata($data) {
        $this->data = $data;
    }
    public function getdata() {
        return $this->data;
    }

    public function setvalor_pago($valor_pago) {
        $this->valor_pago = $valor_pago;
    }
    public function getvalor_pago() {
        return $this->valor_pago;
    }

    public function setpreco_unitario($preco_unitario) {
        $this->preco_unitario = $preco_unitario;
    }
    public function getpreco_unitario() {
        return $this->preco_unitario;
    }

    public function setnota($nota) {
        $this->nota = $nota;
    }
    public function getnota() {
        return $this->nota;
    }

    
}