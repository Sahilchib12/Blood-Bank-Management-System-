<?php 
    $connection = mysqli_connect("localhost:3307","root","") or die("Can't connect to database");
    $db = mysqli_select_db($connection,"bbms");
?>