<?php
session_start();
require 'conexao.php';
require 'function.php';
require 'variables.php';

/*if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: ../index.php');
}*/

if(isset($_POST['submit'])){

    $quest_name  = htmlspecialchars($_POST['quest']);

    $ponto->questAdd($quest_name,10,$id,$pdo);

    echo '<p class="text-light">tudo certo</p>';

    header('location: ../index.php');
    echo 'td certo';
}else{
    header('location: ../index.php');
    echo 'erro';
}