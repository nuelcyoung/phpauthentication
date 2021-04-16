<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "authentication";
$connection = new mysqli($server,$username,$password,$database);
if($connection->connect_error){
    die("Awaiting Resources");
}
?>