<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "studentdb1";
// Create connection with correct port 
$conn = mysqli_connect($servername, $username, $password, $database, 3307);

// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read form data 
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

// Correct table name = users 
$sql = "INSERT INTO users (name, address, email, mobile) 
        VALUES ('$name', '$address', '$email', '$mobile')";

if (mysqli_query($conn, $sql)) {
    echo "Registration Successful!<br>";
    echo "<a href='display.php'>View All Users</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>