<?php 
    
    include '../db_connect.php';


class Joke{

  public $text;

  public function __construct($text)
  {
      $this->text=$text;
  }

  public function addJoke(){

      $db_connect = new db_connect;
      $pdo = $db_connect->connection();

      $stmt = $pdo->prepare("INSERT INTO joke (text) VALUES (:text)");

      $stmt->bindValue(':text', $this->text);

      $stmt->execute();
  }

  public static function updateJoke($id,$text){

      $db_connect = new db_connect;
      $pdo = $db_connect->connection();

      $stmt = $pdo->prepare("UPDATE joke SET text = :text  WHERE id = :id");

      $stmt->bindValue(':text',$text);
      $stmt->bindValue(':id', $id);


      $stmt->execute();
  }


  public static function deleteJoke($id){

    $db_connect = new db_connect;
    $pdo = $db_connect->connection();

    $stmt = $pdo->prepare("DELETE FROM joke WHERE id = :id");

    $stmt->bindValue(':id', $id);

    $stmt->execute();
    

  }

}




















?>