<html>

<head>
    <title>Electricity Bill Calculator in PHP</title>
    <link rel="stylesheet" href="electricity.css" />
</head>

<body>
    <h1> Electricity Bill Calculator in PHP </h1>
    <form method="post" action="">
        Enter units consumed: <input type="number" name="units" />
        <br /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $units = $_POST['units'];
        $total_bill = 0;
        if ($units <= 50) {
            $total_bill = $units * 3.5;
        } elseif ($units <= 150) {
            $total_bill = 50 * 3.5 + ($units - 50) * 4.0;
        } elseif ($units <= 250) {
            $total_bill = 50 * 3.5 + 100 * 4.0 + ($units - 150) * 5.2;
        } else {
            $total_bill = 50 * 3.5 + 100 * 4.0 + 100 * 5.2 + ($units - 250) * 6.5;
        }


        echo "<div class='output'>Total bill: " . $total_bill . "<br>";


        if ($units <= 50) {
            echo "Falls under slab 0-50";
        } elseif ($units <= 150) {
            echo "Falls under slab 51-150";

        } elseif ($units <= 250) {
            echo "Falls under slab 151-250";

        } else {
            echo "Falls under slab 251 or more";

        }


        echo "</div>";
    }
    ?>
</body>

</html>