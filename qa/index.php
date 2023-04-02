<?php
$urladmin = "http://localhost:8080/1640/qa/";
$urluser = "http://localhost:8080/1640/";
$home = "home.php";
$categories = "category.php";
$categoryEdit = "category_edit.php";
$categoryAdd = "category_add.php";
$categoryDelete = "category_delete.php";
$post = "post.php";
$postAdd = "post_add.php";
$postEdit = "post_edit.php";
$postDelete = "post_delete.php";
$statistic = "statistic.php";
$download = "download.php";

$urllogin = "http://localhost:8080/1640/login";

//Connection
$host = "localhost";
$username = "root";
$password = "";
$db = "btwev";
$conn = mysqli_connect($host, $username, $password, $db) or die("Can not connect database " . mysqli_connect_error());

include('./theme.php');


?>