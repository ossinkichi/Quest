<?php
    if(!isset($_SESSION['id'])){
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootsstrap Css--only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Contador</title>
    </head>
    <body class="bg-dark">

        <div class="day m-3">
            <p class="text-light"><?=date('d / M / Y')?></p>
        </div>

        <div class="container bg-light p-3 rounded-4 mt-5" style="width: 750px;">
            <div id="login">
                <h2 class="text-center">Login</h2>
                <form action="./config/verification.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome de Usúario</label>
                        <input type="text" name="name-user" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Senha</label>
                        <input type="password" name="password-user" class="form-control" id="exampleFormControlInput1" placeholder="Senha" required>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success px-3">Entrar</button>
                </form>
            </div>

            <div style="display: none;" id="register">
                <h2 class="text-center">Register</h2>
                <form action="config/verification.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome de Usúario</label>
                        <input type="text" name="name-user" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email-user" class="form-control" id="exampleFormControlInput1" placeholder="Opcional">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Senha</label>
                        <input type="password" name="password-user" class="form-control" id="exampleFormControlInput1" placeholder="Senha" required>
                    </div>

                    <div class="mb3 text-center">
                        <label class="" for="termos">
                            <input type="checkbox" name="termos" id="termos" required>
                            Li e aceito todos os termos e condições
                        </label>
                    </div>
                    <br>
                    
                    <button type="submit" name="register" class="btn btn-success px-3">Registrar</button>
                </form>
            </div>

        </div>
        <div class="container text-center mt-4">
            <button id="link_1" class="btn btn-success rounded-4 register">Regitrar-se</button>
            <button style="display: none;" id="link_2" class="btn btn-success rounded-4 login">Login</button>
        </div>
        
        <script src="./js/script.js"></script>
    
    </body>
</html>
<?php
    }else{
        header('location: index.php');
    }
?>