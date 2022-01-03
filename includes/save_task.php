<?php
include "db.php";

if (isset($_POST['submit'])){
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "INSERT INTO tasks(title, description) VALUES('$title', '$description')";

  $result = mysqli_query($conn, $query);

  if(!$result){
    exit("We found an error");
  }

  header("Location: ../index.php");
}



?>