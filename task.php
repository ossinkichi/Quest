<?php
    session_start();
    if(!isset($_SESSION['id'])){
    
        header('location: login.php');
    
    }else{
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

        <section>
            <div class="container bg-light p-3 rounded-4 mt-5" style="width: 750px;">

                <form action="./config/quest.php" method="post">

                    <div class="mb-3">

                        <label for="exampleFormControlInput1" class="form-label">Qual a Quest</label>
                        <input name="quest" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quest" required>
                    
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Adicionar Quest</button>

                </form>

            </div>
            
        </section>
    </body>
</html>
<?php } ?>