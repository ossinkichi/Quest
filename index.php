<?php
    session_start();
    if(!isset($_SESSION['id'])){
    
        // print_r($_SESSION);
        header('location: login.php');
    
    }else{
    require_once 'config/conexao.php';
    require_once 'config/function.php';
    require_once 'config/variables.php';

    $agr = new DateTime();
    $agr->format('H:i:s');
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootsstrap Css--only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Contador</title>
        <style>
            .bg:hover{
                transition: 0.5s;
                background-color: #0D6EFD;
                color: #fff;
            }
        </style>
    </head>
    <body class="bg-dark">

        <div class="day m-3 d-flex justify-content-between px-2">
            <div>
                <p class="text-light"><?=date('d / M / Y')?></p>
            </div>
            <a href="logout.php"><img src="./icons/logout.png" alt="logout" width="24" height="24"></a>
        </div>
        <div class="container pt-2 text-center">
            <h2 class="text-light"> Points</h2>
        </div>

        <div class="container mt-5" style="width: 290px;">
            <div class="text-center">
                <span class="text-light p-5 p-3 fs-4"><?=$conquist?? '0'?></span>
            </div>
        </div>

            

        <div class="container mt-3 mx-3  " style="width: 500px; height: 400px; ">
            <div class="btn-group row" role="group" style="width: 100%; margin-left: 11px;">
                <button class="con btn btn-success text-light col-3">Concluidas</button>
                <button class="and btn btn-primary text-light col-3">Em andamento</button>
                <button class="fail btn btn-danger text-light col-3">Falhas</button>
            </div>
            <div class="bg-light rounded-2 p-3" style="width: 500px; height: 400px; overflow-y: auto;">
            
                <div class="row container-fluid">
                    <h3 class="mx-3 col-10">Quests</h3>
                    <a href="task.php" class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </a>
                </div>
                <div class="list-group quest" id="con" style="display: none;">

                    <?php
                        for($i = 0; $i < count($questsuccess); $i++){
                                ?>
                                    <a class="bg list-group-item list-group-item-action mb-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1 text-success"><?=$questsuccess[$i]['quest_name'] ?? null ?></h5>
                                            
                                        </div>
                                <?php
                                    }
                    ?>
                                    </a>

                </div>

                <div class="list-group quest" id="fail" style="display: none;">
                    <?php
                        for($i = 0; $i < count($questfail); $i++){
                    ?>
                                    <a class="bg list-group-item list-group-item-action mb-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1 text-danger"><?=$questfail[$i]['quest_name'] ?? null?></h5>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </a>
                    
                </div>

                <div class="list-group quest" id="and">

                    <?php
                        for($i = 0; $i < count($quest); $i++){
                                ?>
                                    <!-- <a class="bg list-group-item list-group-item-action p-3 mb-2"> -->
                                        <div class="bg list-group-item list-group-item-action p-3 mb-2 ">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1"><?=$quest[$i]['quest_name'] ?? 'undefined'?></h5>      
                                                <div>
                                                    <a class="btn btn-success" href="./config/count.php?add=<?= $quest[$i]['id']?>"></a>
                                                    <a class="btn btn-danger" href="./config/fail.php?add=<?= $quest[$i]['id']?>"></a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                }
                    ?>

                </div>

               

            </div>
        </div>
        <!-- Bootsstrap JavaScripts--only -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <script src="./js/quest.js"></script>
    </body>
</html>
<?php } 
    if($agr == '00:00:00'){
       // header('location: clean.php');
    }
?>