<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cantina Online - Alunos</title>
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
                        <a class="nav-link disabled" href="{{route('aluno.dashboard')}}">Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signout')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row text-center">
                <h5>Seu saldo: R${{$user->aluno['saldo']}}</h5>
            </div>
        </div>
        <div class="container espaco">
            <div class="row text-center">
                <h2>Produtos</h2>
                <p></p>

                @foreach ($produtos as $produto)
                
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->name}}</h5>
                            <h5 class="card-title">R$ {{$produto->preco}}</h5>
                            <p><strong>Código</strong>: {{$produto->codigo}}</p>
                            @if ($produto->tipo == 'comida')
                            <p class="card-text"><strong>Ingredientes</strong>: {{$produto->ingrediente}}</p>
                            @elseif ($produto->tipo == 'bebida')
                            <p class="card-text"><strong>Fornecedor</strong>: {{$produto->fornecedor}}</p>
                            @endif
                            <a href="{{route('aluno.comprar', ['id' => $produto->id])}}" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>