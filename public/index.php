<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/config.css">
    <link rel="stylesheet" href="assets/css/stylebase.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="assets/js/login.js" async type="module"></script>
    
    <title>Bem-vindo ao sysAcademy</title>
</head>
<body>
    <div class="base">

        <div class="message hidden mt-4">
            <div id="resposta" class></div>
        </div>

        <div class="content-layout">

            <h1 class="hh1">ACADEMIA</h1>

            <div class="card-base">
                <form class="form-login">
                    <legend>Login</legend>
                    <div class="mb-3">
                        <input type="text" class="form-control field" id="user" placeholder="Usuário">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control field" id="pass" placeholder="Senha">
                    </div>
                    <div class="mb-3">
                        <button id="submit" class="btn btn-primary btn-full">Acessar</button>
                    </div>
                </form>
            </div>

        </div>

        
        <footer><p class="mt-2">&copy; Todos os direitos reservados <span id="data-atual"></span></p></footer>
    </div>
</body>
</html>