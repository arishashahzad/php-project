<?php

$servername = 'localhost';
$databaseName = 'dashboard'; 
$Username = 'root'; 
$Password = '';  

$conn = mysqli_connect($servername, $Username, $Password, $databaseName);
//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
?>