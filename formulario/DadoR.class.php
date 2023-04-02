<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: rgb(202, 202, 202);">
    <div class="container" style="background-color: white; padding: 0;">
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consultar</a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class=" container text-center table ">
            <div class="row">
                <div class="col">
                    <h4 class="text-start"> Consultar - Contatos Agendados </h4>
                    <div class=" table-2">
                        <div class=" bg-primary ">
                            <h5>Nome</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Telefone</h5>
                        </div class="bg-primary ">
                        <div class="bg-primary ">
                            <h5>Origem</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Contato</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Observação</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Ação</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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