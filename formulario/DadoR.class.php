<?php 
require_once("Dados.class.php");

class Dado{
    private $Dado;

    public function __construct(){
        $dado = new Dado();
        
        $dado->setNome($_POST['nome']);
        echo "<Strong>Nome</Strong> = " . $dado->getNome();
        echo "<br>";

        $dado->setTel($_POST['tel']);
        echo "<Strong>Telefone</Strong> = " . $dado->getTel();
        echo "<br>";   

        $dado->setOrigem($_POST['origem']);
        echo "<Strong>Origem</Strong> = " . $dado->getOrigem();
        echo "<br>";

        $dado->setData($_POST['date']);
        echo "<Strong>Data</Strong> = " . $dado->getData();
        echo "<br>";

        $dado->setObs($_POST['obs']);
        echo $dado->getObs();
    }
}new Dado();

?>