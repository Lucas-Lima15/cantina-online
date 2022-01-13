<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cantina Online - Cantina</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <h2>Deposito Aluno</h2>
            </div>
        </div>

        <div class="container espaco">
            <div class="row text-center">
                <p>Aluno: {{$user->name}}, Turno: {{$user->aluno['turno']}}, Turma: {{$user->aluno['turma']}}</p>
            </div>
        </div>

        <div class="container espaco">
            <div class="row text-center">
                <form class="espaco" action="{{route('responsavel.depositaAluno.do', ['id' => $user->id])}}" method="POST">
                    @csrf


                    <div class="form-floating mb-3">
                        <input type="text" name="deposito" class="form-control" id="deposito" placeholder="Nome">
                        <label for="deposito">Valor (ex: XX.XX)</label>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-success">Depositar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center">
            <a href="{{route('responsavel.dashboard')}}">
                <button class="btn btn-danger">Voltar</button>
            </a>
        </div>

        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>