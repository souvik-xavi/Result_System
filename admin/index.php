<?php 
include "../connection.php";
session_start();
ob_start();
if(!isset($_SESSION["email"])){
    header("Location:../login.php");
}
else if($_SESSION['position']=="teacher"){
    header("Location:./view_stud.php");
}else if($_SESSION['position']==="student"){
    header("Location:./stud_view.php");
}
?>