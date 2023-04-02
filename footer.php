<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Footer | CodingLab </title>-->
    <link rel="stylesheet" href="css/footer.css">
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
                    <a class="logo" href="<?php echo" ?page=".$homepage;?>">
                        <img src="image/Logo.png" href="<?php echo" ?page=".$homepage;?>" width="15%" height="auto" alt="logo">
                        <br>
                    </a>
                </div>

            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Organization</li>
                    <li><a href="<?php echo" ?page=".$homepage;?>">Home</a></li>
                    <li><a href="http://localhost:8080/1640/?page=privacy_policy.php" target="_blank">Policy</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Address:</li>
                    <li><small><i class="fa fa-map-marker"></i>   Old Royal Naval College,</small></li>
                    <li><small>Park Row, London SE10 9LS, United Kingdom</small></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Contact Us:</li>
                    <li><small><i class="fa fa-phone"></i>  +44 20 8331 8000</small></li>
                    <li><small><i class="fa fa-envelope"></i>  international@gre.ac.uk</small></li>
                </ul>
                <!-- <ul class="box">
                    <li class="link_name">Courses</li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul> -->
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
                    <a href="http://localhost:8080/1640/?page=privacy_policy.php" target="_blank">Privacy policy</a>
                    <a href="http://localhost:8080/1640/?page=user_agreement.php" target="_blank">Terms & agreement</a>
                </span>
            </div>
        </div>
    </footer>

</body>

</html>