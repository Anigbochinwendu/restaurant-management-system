<?php
//create connection
$connect = mysqli_connect("localhost","root","");
//check connection
if (!$connect){
    die("connection failed: " . mysqli_connect_error());
}
//create database
$_create= mysqli_query($connect,"create database if not exists foodprofile");
if($_create){echo "Database created successfully";}
else{
    echo "Error creating Database: ". mysqli_error($connect);
}

?>