<?php
include_once "../Model/JokeList.php";


    

function getJokes(){

    $req=JokeList::FetchAllJokes();
    foreach($req as $row){
        ?>
        <tr>
       <td <?php echo ' id="'.$row['id'].'"  text ="'.$row["text"].'"'  ?> ><?php  echo $row['id']?> </td>
        <td><?php  echo $row['text']?> </td>
        <td><button  type="submit" name="updatebook" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modal-joke-update" onclick="showinfo(<?php echo ''.$row['id'].' '?>);">Update or Delete</button></td>
        </tr>
         <?php   
    }
}

?>