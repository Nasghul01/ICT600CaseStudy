<?php
    $conn = mysqli_connect('localhost','root','','Anekaresepi');

    if(!$conn){
        die ("Connection failed:" .mysqli_connect_error());
    }
?>