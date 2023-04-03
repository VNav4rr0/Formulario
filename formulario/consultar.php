<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

  </head>

  <body class="bg-secondary">
    <div class="container px-2 bg-light p">
      <div class="col">
        <nav class="navbar navbar-expand-lg bg-primary mb-3 p-2" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                <a class="nav-link disabled">Consultar</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="main" >
                <h6>Consultar - Contato Agendados</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr class="bg-primary">
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th >
                                <?php 
                                require_once("Dados.class.php");
                                $dados = new Dados();
                                $dados->setNome($_POST['nome']);
                                echo $dados->getNome();
                                ?>
                            </th>
                            <td>
                                <?php 
                                require_once("Dados.class.php");
                                $dados = new Dados();
                                $dados->setTel($_POST['tel']);
                                echo $dados->getTel();
                                ?>
                            </td>
                            <td>
                            <?php 
                                require_once("Dados.class.php");
                                $dados = new Dados();
                                $dados->setOrigem($_POST['origem']);
                                echo $dados->getOrigem();
                                ?>
                            </td>
                            <td>
                            <?php 
                                require_once("Dados.class.php");
                                $dados = new Dados();
                                $dados->setData($_POST['date']);
                                echo $dados->getData();
                                ?>
                            </td>
                            <td>
                                <?php 
                                require_once("Dados.class.php");
                                $dados = new Dados();
                                $dados->setObs($_POST['obs']);
                                echo $dados->getObs();
                                ?></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                
            </div>
        </div>
    </div>
  </body>
</html>
