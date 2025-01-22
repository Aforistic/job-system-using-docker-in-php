<?php
$servername="localhost";
$username="root";
$password="";
$dbname="joysystem";


$con= mysqli_connect($servername, $username, $password, $dbname);
if (!$con){
    die();
}
?>