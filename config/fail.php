<?php
session_start();
require 'conexao.php';
require 'function.php';
require_once 'variables.php';

$fail = new functions();


if($_SERVER['REQUEST_METHOD'] != 'GET'){
    header('location: ../index.php');
}
    if(isset($_GET['add'])){
        
        $ident = htmlspecialchars($_GET['add']);

        $id_quest = $ident;

        // print_r($id_prod);
        $fail->questFail($pdo,$id,$id_quest);
    }


header('location: ../index.php');