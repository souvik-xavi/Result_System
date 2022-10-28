<?php 
include "../connection.php";
session_start();
ob_start();
if(!isset($_SESSION["email"])){
    header("Location:../login.php");
}
else{
    echo "Hello World";
    header("Location:./view_stud.php");
}
?>