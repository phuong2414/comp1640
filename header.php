<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewpost" content="width=device-width, initial-scale = 1.0">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <input type="checkbox" id="toggle">
    <nav class="font-Ubuntu">

        <a class="logo" href="homepage.php">
            <img src="image/Logo.png" align="center" width="40%" height="auto" alt="logo">
        </a>

        <label class="navbar-toggler" for="toggle">
            <span class="bar"></span>
        </label>

        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="COMMENT/post.php">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="privacy_policy.php">Privacy</a>
            </li>
            <!-- Welcome non-fix -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item dropdown">
                    <!-- <div class="user-area">
                        <img src="Images/User/<?php echo $sel_user_img['u_image']; ?>" alt="User Image">
                    </div> -->
                    <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome <?php
                        if (isset($_SESSION['user']) != "")
                            echo $_SESSION['u_name'];
                        else
                            echo "guest";
                        ?>
                    </a> -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (isset($_SESSION['user']) == "") {
                            ?>
                            <li class="dropdown-item"><a class="nav-link" href="<?php echo "login/login.php"; ?>">Login</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href=" <?php echo $urllogin . "/" . $signup; ?>">Register</a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['user']) != "" && isset($_SESSION['type']) != "admin") { ?>
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
    </nav>
</body>

</html>