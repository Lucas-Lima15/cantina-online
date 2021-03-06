<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
</head>

<body>

    <header>     
        <ul class="nav justify-content-center">
            <div>                
                <img src="{{asset('img/cantina-web.png')}}" alt="" width="100" height="100" class="d-inline-block align-text-top">
        </ul>  
            
    </header>

    <main class="container text-center">
        <form action="{{ route('login.do') }}" method="POST">
            @csrf
            <div class="mb-3 lg-2">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3 lg-2">
                <label for="password" class="form-label">Senha</label>
                <input name="password" type="password" class="form-control" id="password" required> 
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>