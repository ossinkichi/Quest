<?php
session_start();
require_once 'conexao.php';
require_once 'function.php';
require 'variables.php';

if($_SERVER['REQUEST_METHOD'] != 'GET'){
    header('location: ../index.php');
}
if(isset($_GET['add'])){
        
    $ident = htmlspecialchars($_GET['add']);

    $id_quest = $ident;

        // print_r($id_prod);

    $ponto->questCheck($pdo,$id,$id_quest);
    $ponto->add($pdo,$ad,$user);
        

    header('location: ../index.php');


}else{
    header('location: ../index.php');
}