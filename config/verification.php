<?php

require 'conexao.php';
require 'function.php';

$user = new functions();

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: ../index.php');
}

if(isset($_POST['submit'])){
    
    $name = htmlspecialchars($_POST['name-user']);
    $pass = htmlspecialchars($_POST['password-user']);
    $dado = $user->login($pdo,$name,$pass);

    if(count($dado) == 0){
        header('location: ../login.php');
    }

    // echo '<pre>';
    // print_r($dado);

    session_start();

    for($i = 0; $i <= count($dado); $i++){
        for($i = 0; $i <= count($dado[$i]); $i++){
            if(password_verify($pass,$dado[$i]['senha'])){
                
                $_SESSION['id'] = $dado[$i]['id'];

                print_r($_SESSION);

                header('location: ../index.php');
            }
        }

    }


}else if(isset($_POST['register'])){

    $name = htmlspecialchars($_POST['name-user']);
    $email = htmlspecialchars($_POST['email-user']);
    $pass = htmlspecialchars($_POST['password-user']);

    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $user->register($pdo,$name,$email,$pass_hash);

    header('location: ../login.php');
}else{
    echo 'deu erro';
}