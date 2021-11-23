<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Cantina Online - Cantina</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="{{asset('img/cantina-web.png')}}" alt="" width="100" height="100"
            class="d-inline-block align-text-top">
        </a>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="{{route('cantina.dashboard')}}">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="{{route('cantina.responsaveis')}}">Responsáveis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cantina.alunos')}}">Alunos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('signout')}}">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container espaco">
      <div class="row text-center">
        <h2>Responsáveis</h2>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
        <p></p>
      </div>
    </div>

    <div class="container espaco">
      <div class="row text-center">
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#responsavel"
          aria-expanded="false" aria-controls="collapseExample">
          Adicionar Responsável
        </button>
      </div>
      <br>
      <div class="row text-center collapse" id="responsavel">
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="codigoForm" class="form-label">CPF</label>
            <input type="number" class="form-control" id="codigoForm" required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="nomeForm" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeForm" required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="fornecedorForm" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="forcenedorForm" required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="precoForm" class="form-label">Email</label>
            <input type="email" class="form-control" id="precoForm" required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="imagemForm" class="form-label">Login</label>
            <input type="text" class="form-control" id="imagemForm" required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="imagemForm" class="form-label">Senha</label>
            <input type="password" class="form-control" id="imagemForm" required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-success" id="nomeForm" value="Enviar">
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>