<?php 

$time = date("Y-m-d");
$yeat = date("y");
$closetime = "SELECT * FROM closesuredate WHERE Year = $year" ;
$closetime_run = $conn ->query($closetime);
while ($row = mysqli_fetch_array($closetime_run)){
    if($row['Closesure_date'] > $time){


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New post</title>
</head>

<body>

    <?php
    $err = "";

    if (isset($_POST["btnSubmit"])) {
        $p_name = $_POST["p_name"];
        $p_text = $_POST["p_text"];
        $p_cat = $_POST["p_cat"];
        
        $p_user = $_SESSION['user_uni_no'];

        $imgName = $_FILES['img']['name'];
        $imgTmpName = $_FILES['img']['tmp_name'];


        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "upload/" . $fileName;
        $imgpath = "images/" . $fileName;


        if ($p_name == "") {
            $err .= "<li> Enter post name";
        }
        if ($p_text == "") {
            $err .= "<li> Enter post description";
        }
        if ($imgName == "") {
            $err .= "<li> Choose images";
        }
    
        if (empty($err)) {
            $p_unino = md5(rand());
    
            $sql = "INSERT INTO poster( p_name,p_user, p_image, p_text, p_uni_no, p_file, p_cat) VALUES ('$p_name','$p_user', '$imgName', '$p_text','$p_unino', '$fileName' , '$p_cat')";
            $sql_run = mysqli_query($conn, $sql);
    
            if ($sql_run) {
                move_uploaded_file($imgTmpName, $imgpath);
                move_uploaded_file($fileTmpName, $path);
                header("Location: $urladmin?page=$post");
            } else {
                $error = "Error uploading";
            }
    
        }



    }

    ?>
<h3>Add New post</h3>
<hr>
    <form method="post" enctype="multipart/form-data" style="margin-left: 30%;width:80%;">
        <div class="row">
            <div class="form-group col-sm-7">
                <label for="">Name</label>
                <input type="text" name="p_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group col-sm-7">
                <label for="">Description</label>
                <input type="text" name="p_text" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-sm-7">
                <label for="">Images</label>
                <input type="file" name="img">
            </div>
            <div class="form-group col-sm-7">
                <label for="file">File</label>
                <input type="file" name="file">
            </div>
            
        <div class="form-group col-sm-7">
            <label for="">Where you want to tag for</label>
            <select class="form-control" name="p_cat" id="p_cat">
                <?php
                $sql = "SELECT * from categories";
                $results = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($results)) {
                    ?>
                    <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                    <?php
                }
                ?>
            </select>

        </div>
                <!-- Checkbox Term and Condition -->
                <div class="form-group col-sm-7">
            <p>
                <input id="field_terms"
                    onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');"
                    type="checkbox" required name="terms"> I have read and agree to the
                <a href="http://localhost:8080/1640/?page=user_agreement.php" target="_blank">Terms and Conditions</a>
                and <a href="http://localhost:8080/1640/?page=privacy_policy.php" target="_blank">Privacy Policy</a>
            </p>
        </div>

        <div class="form-row col-md-7">
            <div class="from-group col md-12">
                <input type="submit" class="btn btn-primary" name="btnSubmit" value="Submit">
                <input type="button" class="btn btn-danger" name="btnIgnore" value="Ignore"
                    onclick="window.location='<?php echo '?page=' . $post; ?>'" />
            </div>
        </div>

    </form>

</body>

</html>

<?php 
}else
{
   ?> <h3>The time of add post have ended please wait for the next year</h3> <?php
}
}
?>