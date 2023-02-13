<?php

$ponto = new functions();

$id = $_SESSION['id'];

$dado = $ponto->points($pdo,$id);

$conquist = $dado['points'];
$user     = $dado['id'];
$ad       = $conquist + 5;

$quest = $ponto->quest($pdo,$user);
$questfail = $ponto->failQuest($pdo,$user);
$questsuccess = $ponto->successQuest($pdo,$user);
    




