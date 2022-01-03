<!DOCTYPE html>
<html lang="en">
<?php include "../doc_parts/head.php"; ?>
<?php include "db.php"; ?>

<body>


<?php

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "SELECT * FROM tasks WHERE id = $id";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $description = $row['description'];
  }
}


if (isset($_POST['update'])){
  $id = $_GET['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  
  $query = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = $id";

  $result = mysqli_query($conn, $query);

  if(!$result){
    exit("We found an error");
  }

  header("Location: ../index.php");
}


?>


  
<div class="card">
    <form class="form" action="edit_task.php?id=<?php echo $_GET['id']?>" method="post">
      <input class="input-text" type="text" name="title" 
        value="<?php echo $title ?>">
      <input class="input-text" type="text" name="description" 
        value="<?php echo $description ?>">
      <input class="input-submit" type="submit" name="update" value="UPDATE">
    </form>
</div>


</body>
</html>