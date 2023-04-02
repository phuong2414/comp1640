<?php
include('connection.php');

?>

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #e9ecef;">

  <a class="logo" href="<?php echo " ?page=" . $home; ?>">
    <img src="../image/Logo.png" align="center" width="15%" height="auto" alt="logo">
  </a>

  <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

  <div class="user-cart">
    <?php
    if (isset($_SESSION['Roles'])) {
    ?>
      <a href="http://localhost:8080/1640/login/logout.php" style="text-decoration:none;">
        <i class="fa fa-user mr-5" style="font-size:30px; color:#ffffff;" aria-hidden="true"></i>
      </a>
    <?php
    } else {
    ?>
      <a href="" style="text-decoration:none;">
        <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#00bcd4;" aria-hidden="true"></i>
      </a>

    <?php
    } ?>
  </div>
</nav>