<?php

try{
    $con = new PDO("mysql://hostname=localhost;dbname=php_pdo", 'root','', 
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
    ));
}
catch(PDOException $e){
    echo $e->getMessage();
}