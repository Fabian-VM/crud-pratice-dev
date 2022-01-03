<?php
include "db.php";

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $query = "DELETE FROM tasks WHERE id = $id";

  $result = mysqli_query($conn, $query);

  if(!$result){
    exit("We found an error");
  }

  header("Location: ../index.php");
}


?>