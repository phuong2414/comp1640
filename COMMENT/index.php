<?php
$urladmin = "http://localhost/1640/qa/";
$urluser = "http://localhost/1640/";
$home = "home.php";

$user_agreement = "../user_agreement.php";
$policy = "../privacy_policy.php";
$post = "post.php";
$postView = "post_view.php";

$urllogin = "http://localhost/1640/login";

//Connection
$host = "localhost";
$username = "root";
$password = "";
$db = "btwev";
$conn = mysqli_connect($host, $username, $password, $db) or die("Can not connect database " . mysqli_connect_error());

include('./theme.php');
