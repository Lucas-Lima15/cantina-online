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
                <h2>Cadastro Aluno</h2>
            </div>
        </div>
        <div class="container espaco">
            <div class="row text-center">
                <form class="espaco" action="{{route('responsavel.AdicionarAluno.do')}}" method="POST">
                    @csrf


                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome">
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="matricula" class="form-control" id="matricula" placeholder="XXX.XXX.XXX-XX">
                        <label for="matricula">Matricula</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="turno" class="form-control" id="turno" placeholder="Vespertino">
                        <label for="turno">Turno</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="turma" class="form-control" id="turma" placeholder="XXX.XXX.XXX-XX">
                        <label for="turma">Turma</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone">
                        <label for="telefone">Telefone</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Senha</label>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center">
            <a href="{{route('responsavel.alunos')}}">
                <button class="btn btn-danger">Voltar</button>
            </a>
        </div>

        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>