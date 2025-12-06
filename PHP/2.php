<!DOCTYPE html>
<html>

<head>
    <title>First 10 Fibonacci Numbers</title>
</head>

<body>
    <h2>First 10 Fibonacci Numbers</h2>
    <?php
    $a = 0;
    $b = 1;
    echo "$a $b ";
    for ($i = 3; $i <= 10; $i++) {
        $c = $a + $b;
        echo "$c ";
        $a = $b;
        $b = $c;
    }
    ?>
</body>

</html>