<html>

<head>
    <title>PHP Program To find out the biggest of given three numbers</title>
</head>

<body>
    <form method="post">
        <table border="0">
            <tr>
                <td><input type="text" name="num1" value="" placeholder="Enter 1st number" /></td>
            </tr>
            <tr>
                <td><input type="text" name="num2" value="" placeholder="Enter 2nd number" /></td>
            </tr>
            <tr>
                <td><input type="text" name="num3" value="" placeholder="Enter 3rd number" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];
        if ($a > $b && $a > $c) {
            echo " $a is a Big number. ";
        } else
            if ($b > $c && $b > $a) {
                echo " $b is a Big number. ";
            } else
                if ($c > $a && $c > $b) {
                    echo " $c is a Big number. ";
                }
        return 0;
    }
    ?>
</body>

</html>