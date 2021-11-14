<?php
//1、连接到数据库
//2.编写SQL
//3.执行sql
$dsn='mysql:dbname=php10;host=127.0.0.1';
$pdo= new PDO($dsn,'root','');//xampp  root ,' ';
function write($pdo, $sql){
    $sth = $pdo->prepare($sql);
    return $sth->execute();
}

function read($pdo, $sql){
    $sth = $pdo->prepare($sql);
    $sth->execute();

    $rows = $sth->fetchAll();
    return $rows;
}
?> 
