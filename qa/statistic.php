<!DOCTYPE html>
<html>

<head>
    <title>Sort and Download Table Data</title>
</head>

<body>
    <h2>Sort and Download Table Data</h2>

    <form method="post">
        <label for="sort">Sort By:</label>
        <select id="sort" name="sort">
            <option value="ASC">Ascending</option>
            <option value="DESC">Descending</option>
        </select>
        <button type="submit" name="sortBtn">Sort</button>
        <div class="float-right">
            <a href="export.php" class="btn btn-success"><i class="dwn"></i> Export</a>
        </div>
    </form>

    <?php
    //Connect to database
    $db = new mysqli("localhost", "root", "", "btwev");

    //Query to get data from poster table
    $sql = "SELECT * FROM poster";

    //Check if sort button is clicked
    if (isset($_POST["sortBtn"])) {
        //Get the sort order from select input
        $sortOrder = $_POST["sort"];
        //Append the sort order to the SQL query
        $sql .= " ORDER BY p_id $sortOrder";
    }

    //Execute the query
    $result = $db->query($sql);

    //Check if download button is clicked
    if (isset($_POST["downloadBtn"])) {
        //Create a file pointer
        $fp = fopen('poster_data.csv', 'w');
        //Write the header row to the CSV file
        fputcsv($fp, array('Poster ID', 'Poster Name'));
        //Loop through the result set and write each row to the CSV file
        while ($row = $result->fetch_assoc()) {
            fputcsv($fp, array($row['p_id'], $row['p_name']));
        }

        //Close the file pointer
        fclose($fp);

        //Set headers to force download the CSV file
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="poster_data.csv";');
        header('Content-Length: ' . filesize('poster_data.csv'));
        readfile('poster_data.csv');
        exit();
    }


    //Check if there are any rows returned from the query
    if ($result->num_rows > 0) {
        //Output table header
        echo "<table border='1'>";
        echo "<tr><th>Poster ID</th><th>Poster Name</th></tr>";

        //Loop through the result set and output each row as a table row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['p_id'] . "</td><td>" . $row['p_name'] . "</td></tr>";
        }

        //Close the table
        echo "</table>";
    } else {
        //If no rows returned, output message
        echo "No data found.";
    }

    //Close the database connection
    $db->close();
    ?>