
</html>
<?php 
require_once("Dados.class.php");

class DadoR{
    private $Dado;

    public function __construct(){
        $dados = new Dados();
        
        $dados->setNome($_POST['nome']);
        echo "<Strong>Nome</Strong> = " . $dados->getNome();
        echo "<br>";

        $dados->setTel($_POST['tel']);
        echo "<Strong>Telefone</Strong> = " . $dados->getTel();
        echo "<br>";   

        $dados->setOrigem($_POST['origem']);
        echo "<Strong>Origem</Strong> = " . $dados->getOrigem();
        echo "<br>";

        $dados->setData($_POST['date']);
        echo "<Strong>Data</Strong> = " . $dados->getData();
        echo "<br>";

        $dados->setObs($_POST['obs']);
        echo "<Strong>Observação</Strong>  = " . $dados->getObs();
    }
}new DadoR();

?>