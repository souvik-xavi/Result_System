<?php
include  "../connection.php";
session_start();
if(isset($_SESSION['email'])){

$query ="SELECT * FROM users WHERE position='student'";
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
                <th><h1>email</h1></th>
                <th><h1>possword</h1></th>
                <th><h1>position</th>
                <th></th>
                <th><h1><a class="btn btn-primary" href="../logout.php">Logout</a></h1></th>
            </thead>
            <tbody>
                <?php 
                while($row=mysqli_fetch_assoc($sql)){
                
                ?>
                <tr>
                    <td><?php echo ($row['id'])?></td>
                    <td><?php echo ($row['users'])  ?></td>
                    <td><?php echo ($row['email']) ?></td>
                    <td><?php echo ($row['position']) ?></td>
                    <td><a href="add_stud.php?add=<?php echo $row['id']?>">ADD</a> </td>
                    <td><a href="view_stud.php?delete=<?php echo $row['id']?>">Delete</a> </td>
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