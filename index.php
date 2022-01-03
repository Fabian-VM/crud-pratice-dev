<!DOCTYPE html>
<html lang="en">
<?php include "doc_parts/head.php"; ?>
<?php include "includes/db.php"; ?>

<body>
  
  <div class="card">
    <form class="form" action="includes/save_task.php" method="post">
      <input class="input-text" type="text" name="title" value="title">
      <input class="input-text" type="text" name="description" value="description">
      <input class="input-submit" type="submit" name="submit" value="SUBMIT">
    </form>
  </div>

  <div class="card">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Create at</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php
          $query = "SELECT * FROM tasks";

          $result = mysqli_query($conn, $query);

          /*Improve this*/
          while ($row = mysqli_fetch_array($result)){
        ?>
        
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['created_date'] ?></td>
            <td>
              <a href="includes/edit_task.php?id=<?php echo $row['id'] ?>">Edit</a>  
              <a href="includes/delete_task.php?id=<?php echo $row['id'] ?>">Delete</a>
            </td>
          </tr>
        
        <?php
          }
        ?>
      </tbody>

    </table>
  </div>


</body>
</html>