<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<a class="logo" href="<?php echo " ?page=" . $home; ?>">
            <img src="../image/Logo.png" align="center" width="95%" height="auto" alt="logo">
        </a>
    <div class="side-header">
        <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>

    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="?page=AcademicYear.php"><i class="fa fa-th-large"></i> Acadamic Year</a>
    <a href="<?php echo "?page=role.php"; ?>"><i class="fa fa-users"></i> Role</a>
    <!---->
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>