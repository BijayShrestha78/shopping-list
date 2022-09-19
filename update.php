<?php
  include('./db_config.php');
  $id = $_GET['updateid'];
  $sql = "SELECT * FROM shopping_list WHERE id='$id'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shopping list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
        <form method="POST">
            <h3 class='text-center'>shopping list</h3>
            <input type="text" class="form form-control mb-3" name="shopping" value="<?php echo $row['shopping']?>">
            <button type="submit" class="btn btn-primary" name="update_btn">Update item</button>
        </form>
    </div>
    <?php
      if(isset($_POST['update_btn'])){
          $item = $_POST['shopping'];
          $sql = "update shopping_list set shopping='$item' where id=$id";
          $result = mysqli_query($conn,$sql);
          echo $result;
          if($result){
            header('Location: index.php');
          }else{
            die($conn -> connect_error);
          }
        }   
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>