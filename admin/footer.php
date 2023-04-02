<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Footer | CodingLab </title>-->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <footer>
        <div class="content font-Ubuntu">
            <div class="top">
                <div class="logo-details">
                    <a class="logo" href="homepage.php">
                        <img src="image/Logo.png" href="homepage.php" width="15%" height="auto" alt="logo">
                        <br>
                    </a>
                </div>

            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Company</li>
                    <li><a href="<?php echo" ?page=".$homepage;?>">Home</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Services</li>
                    <li><a href="#">App </a></li>
                    <li><a href="#">Web </a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Account</li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">My account</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Courses</li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
                <ul class="box media-icons">
                    <li href="#"><i class="fab fa-facebook-f"></i></li>
                    <li href="#"><i class="fab fa-twitter"></i></li>
                    <li href="#"><i class="fab fa-instagram"></i></li>
                    <li href="#"><i class="fab fa-linkedin-in"></i></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details font-Ubuntu">
            <div class="bottom_text">
                <span class="copyright_text"><a href="<?php echo" ?page=".$homepage;?>">University of Greenwich</a>© 2023</span>
                <span class="policy_terms">
                    <a href="<?php echo" ?page=".$policy;?>" target="_blank">Privacy policy</a>
                    <a href="<?php echo" ?page=".$user_agreement;?>" target="_blank">Terms & agreement</a>
                </span>
            </div>
        </div>
    </footer>

</body>

</html>