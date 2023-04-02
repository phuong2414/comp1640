<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewpost" content="width=device-width, initial-scale = 1.0">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./COMMENT/CSS/style2.css">
    <link rel="stylesheet" href="./COMMENT/CSS/header.css">
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
            <!-- Welcome non-fix -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome <?php
                                if (isset($_SESSION['user']) != "")
                                    echo $_SESSION['name'];
                                else
                                    echo "guest";
                                ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if ($_SESSION['Roles']  == "") {
                        ?>
                            <li class="dropdown-item"><a class="nav-link" href="login/login.php">Login</a></li>
                            <hr>
                            <li class="dropdown-item"><a class="nav-link" href=" <?php echo $urllogin . "/" . $signup; ?>">Register</a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['Roles'] ) != "" && isset($_SESSION['Roles'] ) == 1) { ?>
                            <li><a class="dropdown-item" href="<?php echo " ?page=" . $amanage; ?>">Account manage </a></li>
                            <li><a class="dropdown-item" href=" <?php echo $urllogin . "/" . $logout; ?>">Logout</a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['user']) == "admin" && isset($_SESSION['type']) == "admin") { ?>
                            <li><a class="dropdown-item" href="<?php echo $urladmin; ?>">Admin </a></li>
                            <li><a class="dropdown-item" href=" <?php echo $urllogin . "/" . $logout; ?>">Logout</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </ul>

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