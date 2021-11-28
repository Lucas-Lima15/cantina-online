<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Cantina Online - Cantina</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="{{asset('img/cantina-web.png')}}" alt="" width="100" height="100" class="d-inline-block align-text-top">
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
      <div class="row text-center col-lg-12">
        <a href="{{route('cantina.adicionarProduto')}}">
          <button class="btn btn-success">Adicionar Produto</button>
        </a>
      </div>
    </div>

    <div class="container espaco">
      <div class="row text-center">
        <h2>Produtos</h2>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Código</th>
                <th scope="col">Ingredientes</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($produtos as $produto)
              <tr>
                <th scope="row">{{$produto->id}}</th>
                <td>{{$produto->name}}</td>
                <td>{{$produto->codigo}}</td>
                <td>{{$produto->ingrediente}}</td>
                <td>{{$produto->fornecedor}}</td>
                <td>{{$produto->preco}}</td>
                <td><a href="{{route('cantina.editaProduto', ['id' => $produto->id])}}">
                  <button class="btn btn-warning">Editar</button>
                </a></td>
                <td><a href="{{route('cantina.excluirProduto.do', ['id' => $produto->id])}}">
                  <button class="btn btn-danger">Excluir</button>
                </a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
    </div>
    </div>
    

  </main>

  <script src="../js/Cantina/produtos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>