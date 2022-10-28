<?php 
include "../connection.php";


 if(isset($_POST["submit"]))
 {
    $id=$_GET["add"];
  $name= $_POST["name"];
  $math=$_POST["math"];
  $chem=$_POST['chem'];
  $phy=$_POST["phy"];
  echo $math;
  echo $phy;
  echo $chem;
  $query= "INSERT INTO marks1(stud_id,stud_name,phy,chem,maths) VALUES ($id,'$name',$phy,$chem,$math)";
   $results= mysqli_query($connection,$query);
   header("Location:./view.php");
 }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Form</title>
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materia…
[3:31 pm, 28/10/2022] Souvik Codeclouds: <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Form</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <form method="post" action="">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Marks</h4>

                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"name="name"  placeholder="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="physics" class="col-sm-3 col-form-label">Physics</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phy" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="chem" class="col-sm-3 col-form-label">Chem</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="chem" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="math" class="col-sm-3 col-form-label">Math</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="math" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit" >Submit</button>
                </form>
            </div>
        </div>
    </div>
    </form>
</body>
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../assets/vendors/select2/select2.min.js"></script>
<script src="../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/misc.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../assets/js/file-upload.js"></script>
<script src="../assets/js/typeahead.js"></script>
<script src="../assets/js/select2.js"></script>

</html>