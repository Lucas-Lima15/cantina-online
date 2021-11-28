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

            </div>
        </nav>
    </header>
    <main>
        <div class="container espaco">
            <div class="row text-center">
                <h2>Cadastro Produto</h2>
            </div>
        </div>
        <div class="container espaco">
            <div class="row text-center">
                <form class="espaco" action="{{route('cantina.adicionarProduto.do')}}" method="POST">
                    @csrf

                    <div class="form-floating">
                        <select class="form-select" name="tipo" id="tipo" aria-label="Tipo">
                            <option value="comida" selected>Comida</option>
                            <option value="bebida">Bebida</option>
                        </select>
                        <label for="tipo">Tipo</label>
                    </div> <br>
                    <div class="form-floating mb-3">
                        <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Nome">
                        <label for="codigo">Código</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome">
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="ingrediente" class="form-control" id="ingrediente" placeholder="Ingredientes">
                        <label for="ingrediente">Ingredientes</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="fornecedor" class="form-control" id="fornecedor" placeholder="Fornecedor">
                        <label for="fornecedor">Fornecedor</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="preco" class="form-control" id="preco" placeholder="Preço">
                        <label for="preco">Preço</label>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center">
            <a href="{{route('cantina.dashboard')}}">
                <button class="btn btn-danger">Voltar</button>
            </a>
        </div>

        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>