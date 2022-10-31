<!DOCTYPE html>
<?php 
include "connection.php";
if(isset($_POST['submit'])){

$email= $_POST["email"];
$password= $_POST["password"];

$query = "SELECT * FROM users where email = '$email'";



$sql = mysqli_query($connection,$query);
$row= mysqli_fetch_assoc($sql);

if(!$sql){
    echo "<p style= 'color :white'>"."Something went Wrong" . mysqli_errno($connection)."</p>";
} else{
    if(mysqli_num_rows($sql)==0)
    {echo "<p style= 'color :white'>"." went Wrong.</p>";}
    else{
        $verify = password_verify($password,$row['password']);

        if($verify) 
    { 
         session_start();
         $_SESSION['email']= $row['email'];
         $_SESSION['name']=$row['users'];
         $_SESSION['position']=$row['position'];
         $_SESSION['id']=$row['id'];
         header("Location:admin/index.php");
    }
    else{
        echo "<p style= 'color :white'>.Password didnt match.</p>";
    }
}    
}
}




?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Form</title>
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="./assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align:center">Register</h4>
            <p class="card-description" style="text-align:center"> Sign up to Continue</p>
            <form class="forms-sample" method="POST" action="">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" class="form-control"  name="password" placeholder="Password" required>
              
                </div>
               
                <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
                
            </form>
        </div>
        <a href="registration.php">Registration</a> 
    </div>
</body>
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./assets/vendors/select2/select2.min.js"></script>
    <script src="./assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./assets/js/file-upload.js"></script>
    <script src="./assets/js/typeahead.js"></script>
    <script src="./assets/js/select2.js"></script>
</html>