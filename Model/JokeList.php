<?php 

include '../db_connect.php';



class JokeList{

public static function   FetchAllJokes(){
    $db_connect = new db_connect;
    $pdo = $db_connect->connection();
    $stmt = $pdo->prepare('SELECT * FROM joke');
    $stmt->execute();
    return $stmt->fetchAll();
}  



public static function   FetchAcientJokes(){
    $db_connect = new db_connect;
    $pdo = $db_connect->connection();

    $stmt = $pdo->prepare('SELECT * FROM joke ORDER BY id DESC');

    $stmt->execute();
    return $stmt->fetchAll();
}  



public static function   FetchRecentJokes(){
    $db_connect = new db_connect;
    $pdo = $db_connect->connection();

    $stmt = $pdo->prepare('SELECT * FROM joke ORDER BY id');

    $stmt->execute();
    return $stmt->fetchAll();



}


}



?>