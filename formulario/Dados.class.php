<?php 

 class Dados{
    private $nome, $data, $obs, $tel, $origem;

    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
    $this->nome = $nome;
    }
    public function getData(){
        return $this -> nome;
    }

    public function setData($data){
    $this->nome = $data;
    }
    public function getObs(){
        return $this -> obs;
    }

    public function setObs($obs){
    $this->obs = $obs;
    }
    public function getTel(){
        return $this ->tel;
    }

    public function setTel($tel){
    $this->tel= $tel;
    }
    public function getOrigem(){
        return $this -> origem;
    }

    public function setOrigem($origem){
    $this->origem = $origem;
    }
}
?>