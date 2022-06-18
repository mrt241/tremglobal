<?php 

session_start();

try{

    $db = new PDO("mysql:host=localhost;dbname=tremglobal;charset=utf8;","root","");
    $db->query("SET CHARACTER SET utf8");
    $db->query("SET NAMES utf8");

}catch(PDOException $e){
    print_r($e->getMessage());
    die();
}


?>