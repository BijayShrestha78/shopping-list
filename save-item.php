<?php
    include('./db_config.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $item = $_POST['shopping'];
        $sql = "insert into shopping_list (shopping) values ('$item')";
    
        $result = mysqli_query($conn,$sql);
        echo $result;
        
        if($result){
          header('Location: index.php');
        }else{
          die($conn -> connect_error);
        }
    }   
?>

