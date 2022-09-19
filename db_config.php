<?php
    $conn = new mysqli("localhost","root","","shopping");
    if($conn -> connect_error){
        die($conn -> connect_error);
    }
?>