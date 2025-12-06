<html>

<head>
    <title>PHP Program for Displaying Greeting depending upon Current Time
        Zone</title>
</head>

<body>

    <h3>Displaying Greeting depending upon Current Time Zone</h3>

    <?php
    date_default_timezone_set("Asia/Kolkata");
    $h = date('G');

    if ($h >= 5 && $h <= 11) {
        echo "Good morning";
    } elseif ($h >= 12 && $h <= 15) {
        echo "Good afternoon";
    } else {
        echo "Good evening";
    }
    ?>

</body>

</html>