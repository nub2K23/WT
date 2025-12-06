<html>

<head>
    <title>ODD or EVEN</title>
</head>

<body>

    <h2>PHP script to find given number is ODD or EVEN </h2>

    <form action="" method="post">
        <input type="text" name="num" />
        <input type="submit" />
    </form>

    <?php
    if ($_POST) {
        $num = $_POST['num'];

        if (!is_numeric($num)) {
            echo "String not allowed.  
                Input should number";
            return;
        }
        if ($num % 2 == 0) {
            echo "Number is an even number";
        } else {
            echo "Number is an odd number ";

        }
    }
    ?>

</body>

</html>