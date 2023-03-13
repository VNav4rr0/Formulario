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
    <div class="container px-2 bg-light">
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
      <div style="margin:2%" class="row text-start px-2 pl-3 pb-2">
        <div class="row">
          <p class="fs-5 fw-semibold m-0">
            Cadastrar - Agendamento de Potenciais Cliente
          </p>
        </div>
        <!-- INPUTS -->
        <div class="row">
          <p class="fs-6 m-0">
            Sistema utilizado para agendamento de serviços.
          </p>
        </div>

        <div class="row">
          <p class="fs-5 mt-1 ">Nome:</p>
          <input type="text" class="form-control" name="nome"/>
        </div>

        <div class="row">
          <p class="fs-5 mt-1 ">Telefone:</p>
          <input type="tel" class="form-control" placeholder="(xx)xxxxx-xxxx" name="telefone" />
        </div>

        <div class="row">
          <p class="fs-5 mt-1 ">Origem:</p>
          <div class="input-group p-0">
            <select class="form-select" id="inputGroupSelect01">
              <option value="1">Celular</option>
              <option value="2">Telefone</option>
            </select>
          </div>
        </div>

        <div class="row">
          <p class="fs-5 mt-1 ">Data do Contato:</p>
          <input type="date" class="form-control" placeholder="(xx)xxxxx-xxxx" />
        </div>
        
        <div class="row">
          <p class="fs-5 mt-1 ">Observação:</p>
          <textarea class="form-control"  id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <div class="col mt-3 p-0">
          <button  type="button" class="btn btn-primary ">
            Cadastrar
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
