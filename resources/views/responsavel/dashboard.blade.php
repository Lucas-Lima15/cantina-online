<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <a class="nav-link disabled" href="{{route('responsavel.dashboard')}}">Saldo/Depósito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('responsavel.alunos')}}">Meu(s) Aluno(s)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signout')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <main>
        <div class="container text-center">
            <h2>Saldo</h2>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Saldo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->matricula}}</td>
                            <td>{{$user->user['name']}}</td>
                            <td>{{$user->saldo}}</td>
                            <td><a href="{{route('responsavel.depositaAluno', ['id' => $user->user['id']])}}">
                                    <button class="btn btn-primary">Depositar</button>
                                </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</body>