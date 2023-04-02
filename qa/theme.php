<?php
    session_start();
    // $role = $_SESSION['Roles'];
    $role = 1;
    if($role == 1){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>QA</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">

            <!--Navigation-->
            <?php include("./header.php"); ?>
            <?php include("./sidebar.php"); ?>
            <!--Section-->
            <?php include("./section.php"); ?>

        </div>
    </div>

    <!--Footer-->

    <!-- Bootstrap core JS-->
    <script type="text/javascript" src="assets/js/ajaxWork.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
    }
else
{
       echo '<script type="text/javascript"> window.onload = function () { alert("You not have authorization to access this page!!"); } </script>';
       header('location: ../index.php');
}       
    ?>