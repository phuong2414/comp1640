<?php
$urladmin = "http://localhost/1640/qa/";
$urluser = "http://localhost/1640/";
$home = "home.php";
$categories = "category.php";
$categoryEdit = "category_edit.php";
$categoryDelete = "category_delete.php";
$post = "post.php";
$postEdit = "post_edit.php";
$postDelete = "post_delete.php";

$conn = mysqli_connect('localhost', 'root', '', 'btwev')
    or die("Can not connect database" . mysqli_connect_error());
?>