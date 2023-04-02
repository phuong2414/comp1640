<?php
session_start();
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'btwev');
require_once './Config/Functions.php';
$Fun_call = new Functions();

// Get the total number of records from our table "poster".
$total_pages = $mysqli->query('SELECT * FROM poster')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

$select_post = $Fun_call->select_order('poster', 'p_id');


$field['verify_token'] = $_SESSION['user_uni_no'];
$sel_user_img = $Fun_call->select_assoc('users', $field);

if ($stmt = $mysqli->prepare('SELECT * FROM poster ORDER BY p_id LIMIT ?,?')) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute();
    // Get the results...
    $result = $stmt->get_result();
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>PHP & MySQL dbcon by CodeShack</title>
        <meta charset="utf-8">
        <style>
            html {
                font-family: Tahoma, Geneva, sans-serif;
                padding: 20px;
                background-color: #F8F9F9;
            }

            table {
                border-collapse: collapse;
                width: 500px;
            }

            td,
            th {
                padding: 10px;
            }

            th {
                background-color: #54585d;
                color: #ffffff;
                font-weight: bold;
                font-size: 13px;
                border: 1px solid #54585d;
            }

            td {
                color: #636363;
                border: 1px solid #dddfe1;
            }

            tr {
                background-color: #f9fafb;
            }

            tr:nth-child(odd) {
                background-color: #ffffff;
            }

            .dbcon {
                list-style-type: none;
                padding: 10px 0;
                display: inline-flex;
                justify-content: space-between;
                box-sizing: border-box;
            }

            .dbcon li {
                box-sizing: border-box;
                padding-right: 10px;
            }

            .dbcon li a {
                box-sizing: border-box;
                background-color: #e2e6e6;
                padding: 8px;
                text-decoration: none;
                font-size: 12px;
                font-weight: bold;
                color: #616872;
                border-radius: 4px;
            }

            .dbcon li a:hover {
                background-color: #d4dada;
            }

            .dbcon .next a,
            .dbcon .prev a {
                text-transform: uppercase;
                font-size: 12px;
            }

            .dbcon .currentpage a {
                background-color: #518acb;
                color: #fff;
            }

            .dbcon .currentpage a:hover {
                background-color: #518acb;
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Join Date</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <!-- <?php echo $row['name']; ?> -->
                        <div class="cintainer-fluid">
                            <div class="container">
                                <div class="row">
                                    <?php if ($select_post) {
                                        foreach ($select_post as $select_post_data) { ?>
                                            <div class="col-sm-6 mt-2 mb-2">
                                                <div class="card">
                                                    <img src="/1640/image/<?php echo $select_post_data['p_image']; ?>"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <?php echo $select_post_data['p_name']; ?> #
                                                            <?php
                                                            $cat_id = $select_post_data['p_cat'];
                                                            $catName = "SELECT cat_name FROM categories WHERE cat_id= '$cat_id'";
                                                            $catName_run = $mysqli->query($catName);
                                                            while ($row = mysqli_fetch_array($catName_run)) {
                                                                echo $row['cat_name'];
                                                            }

                                                            ?>
                                                        </h5>
                                                        <p class="card-text">
                                                            <?php echo substr($select_post_data['p_text'], 0, 200) . '&nbsp;.......'; ?>
                                                        </p>
                                                        <a href="post_view.php?post_uni_no=<?php echo $select_post_data['p_uni_no']; ?>"
                                                            class="btn btn-sm btn-primary">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>


                        </div>
                    </td>


                <?php endwhile; ?>

                <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
                    <ul class="dbcon">
                        <?php if ($page > 1): ?>
                            <li class="prev"><a href="dbcon.php?page=<?php echo $page - 1 ?>">Prev</a></li>
                        <?php endif; ?>

                        <?php if ($page > 3): ?>
                            <li class="start"><a href="dbcon.php?page=1">1</a></li>
                            <li class="dots">...</li>
                        <?php endif; ?>

                        <?php if ($page - 2 > 0): ?>
                            <li class="page"><a href="dbcon.php?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                        <?php endif; ?>
                        <?php if ($page - 1 > 0): ?>
                            <li class="page"><a href="dbcon.php?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                        <?php endif; ?>

                        <li class="currentpage"><a href="dbcon.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

                        <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1): ?>
                            <li class="page"><a href="dbcon.php?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li>
                        <?php endif; ?>
                        <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 1): ?>
                            <li class="page"><a href="dbcon.php?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                        <?php endif; ?>

                        <?php if ($page < ceil($total_pages / $num_results_on_page) - 2): ?>
                            <li class="dots">...</li>
                            <li class="end"><a href="dbcon.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
                        <?php endif; ?>

                        <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
                            <li class="next"><a href="dbcon.php?page=<?php echo $page + 1 ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </tr>
        </table>
    </body>

    </html>
    <?php
    $stmt->close();
}
?>