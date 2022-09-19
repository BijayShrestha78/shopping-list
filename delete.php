<?php
    include('./db_config.php');
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM shopping_list WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if($result){
          header('Location: index.php');
        }else{
          die($conn -> connect_error);
        }
    }
?>