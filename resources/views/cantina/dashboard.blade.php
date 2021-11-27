<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
            <a class="nav-link disabled" href="{{route('cantina.dashboard')}}">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cantina.responsaveis')}}">Responsáveis</a>
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
         <h2>Produtos</h2>
        
          </div>
        </div>
      </div>      
    </div>
    <div class="container espaco">
      <div class="row text-center">
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#comida" aria-expanded="false" aria-controls="collapseExample">
          Adicionar Comida 
        </button>
      </div>
      <br>
      <div class="row text-center collapse" id="comida">
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="codigoForm" class="form-label">Código</label>
            <input type="number" class="form-control" id="codigoForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="nomeForm" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="ingredienteForm" class="form-label">Ingredientes</label>
            <input type="text" class="form-control" id="ingredienteForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="precoForm" class="form-label">Preço</label>
            <input type="text" class="form-control" id="precoForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="imagemForm" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagemForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-success" id="nomeForm" value="Enviar">
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row text-center">
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#bebida" aria-expanded="false" aria-controls="collapseExample">
          Adicionar Bebida 
        </button>
      </div>
      <br>
      <div class="row text-center collapse" id="bebida">
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="codigoForm" class="form-label">Código</label>
            <input type="number" class="form-control" id="codigoForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="nomeForm" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="fornecedorForm" class="form-label">Fornecedor</label>
            <input type="text" class="form-control" id="forcenedorForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="precoForm" class="form-label">Preço</label>
            <input type="text" class="form-control" id="precoForm">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mb-3">
            <label for="imagemForm" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagemForm">
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

  <script src="../js/Cantina/produtos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>