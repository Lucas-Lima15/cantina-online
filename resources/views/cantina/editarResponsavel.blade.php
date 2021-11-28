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
                <h2>Cadastro Responsável</h2>
            </div>
        </div>
        <div class="container espaco">
            <div class="row text-center">
                <form class="espaco" action="{{route('cantina.editaResponsavel.do', ['id' => $user->id])}}" method="POST">
                    @csrf


                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome" value="{{$user->name}}">
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{$user->email}}">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="XXX.XXX.XXX-XX" value="{{$user->responsavel['cpf']}}">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone" value="{{$user->responsavel['telefone']}}">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center">
            <a href="{{route('cantina.responsaveis')}}">
                <button class="btn btn-danger">Voltar</button>
            </a>
        </div>

        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>