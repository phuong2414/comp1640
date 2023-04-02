<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewpost" content="width=device-width, initial-scale = 1.0">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="CSS/header.css">
</head>

<body>
    <input type="checkbox" id="toggle">
    <nav class="font-Ubuntu">

        <a class="logo" href="homepage.php">
            <img src="image/Logo.png" align="center" width="50%" height="auto" alt="logo">
        </a>

        <label class="navbar-toggler" for="toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>

        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo " ?page=" . $home; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo " ?page=" . $post; ?>">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/1640/?page=privacy_policy.php" target="_blank">Privacy</a>
            </li>

            <!-- <li class="nav-item">
                <div class="user-area">
                    <img src="Images/User/<?php echo $sel_user_img['u_image']; ?>" alt="imageUser">
                </div>
            </li> -->

            <div class="nav-item dropdown">

                <div class="user-area">Me
                    <!-- <img src="Images/User/<?php echo $sel_user_img['u_image']; ?>" alt="imageUser"> -->
                </div>
                <a class="dropbtn"></a>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="http://localhost:8080/1640/login/logout.php">Logout</a>
                </div>
            </div>
    </nav>
</body>

</html>