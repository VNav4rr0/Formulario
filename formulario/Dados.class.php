<?php 

 class Dados{
    private $nome;
    private $data;
    private $obs;
    private $tel;
    private $origem;

    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
    $this->nome = $nome;
    }
    public function getData(){
        return $this -> data;
    }

    public function setData($data){
    $this->data = $data;
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