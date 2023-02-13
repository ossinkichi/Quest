<?php 

define('HOST','localhost');
define('DBNAME','contador');
define('USUARIO','root');
define('PASSWORD','');

    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USUARIO,'');
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $error){
        
        echo "<p style=\"background: red; padding:12px;\">Algo deu errado, tente mais tarde</p>";
        // $error->getMessage();
        
    }
    
