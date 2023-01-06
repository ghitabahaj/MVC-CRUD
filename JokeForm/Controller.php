<?php
include_once "../Model/JokeForm.php";

session_start();

    if(isset($_POST['savejoke']))                 saveJoke();
    if(isset($_POST['updatejoke']))               updatejoke();
    if(isset($_POST['deletejoke']))               deletejoke();




    function saveJoke(){
     $joke = $_POST['joke'];

     $newjoke = new Joke($joke);

     $newjoke->addJoke();
      
     header("location:../public/index.php");


    }

   function updatejoke(){
    $id = $_POST['jokeid'];
    $joke = $_POST['joke-update'];

    Joke::updateJoke($id,$joke);
    header("location:../public/index.php");
    
   }



   function deletejoke(){
    $id = $_POST['jokeid'];
    
    $req=Joke::deleteJoke($id);
    if($req){
       echo "done";
    }else{
        echo "error";
    }
   }



?>








?>