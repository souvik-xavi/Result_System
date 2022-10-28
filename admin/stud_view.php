<?php
include  "../connection.php";
session_start();
if(isset($_SESSION['email'])){
$id=$_SESSION['id'];
$query ="SELECT * FROM marks1 where stud_id= $id";
$sql = mysqli_query($connection,$query);
if(!$sql){
    echo "Something went wrong". mysqli_connect($connection);

}
if(isset($_GET['delete'])){

    $stud_id=$_GET['delete'];
    $query1 = "DELETE FROM marks1
    WHERE id = $stud_id";

    $res=mysqli_query($connection,$query1);

    if(!$res){
        echo "something went wrong". mysqli_error($connection);

    }else{
        header("Location:view.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>

<body>
        <table  class="container" >
            <thead>
                <th><h1></h1></th>
                <th><h1>name</h1></th>
                <th><h1>Math</h1></th>
                <th><h1>Chemistry</h1></th>
                <th><h1>Physics</th>
                <th></th>
                <th><h1><a class="btn btn-primary" href="logout.php">Logout</a></h1></th>
            </thead>
            <tbody>
                <?php 
                while($row=mysqli_fetch_assoc($sql)){
                
                ?>
                <tr>
                    <td><?php echo ($row['id'])?></td>
                    <td><?php echo ($row['stud_name'])  ?></td>
                    <td><?php echo ($row['maths']) ?></td>
                    <td><?php echo ($row['chem']) ?></td>
                    <td><?php echo ($row['phy'])?> </td>
                </tr>
                <?php

            }
                 ?>

            </tbody>
        </table>
    </container>
</body>

</html>

<?php 
}else{
    header("Location:login.php");

}

?>