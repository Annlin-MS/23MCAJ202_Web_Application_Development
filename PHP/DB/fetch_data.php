<?php
// Database connection settings
$servername = "localhost";    // Database server (localhost if local)
$username = "root";           // Database username
$password = "";               // Database password
$dbname = "testdb";           // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from a table
$sql = "SELECT id, name, email FROM users";  // Example table: 'users'
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data as a neat HTML table
    echo "<h2>User Details</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    // Fetch each row and display
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
