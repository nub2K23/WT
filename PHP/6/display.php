<?php
$conn = mysqli_connect("localhost", "root", "", "studentdb1", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Correct table name = users 
$sql = "SELECT id, name, address, email, mobile FROM users";
$result = mysqli_query($conn, $sql);

echo "<h2>Registered Users</h2>";

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr> 
            <th>ID</th> 
            <th>Name</th> 
            <th>Address</th> 
            <th>Email</th> 
            <th>Mobile</th> 
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No users found!";
}

mysqli_close($conn);
?>