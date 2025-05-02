<?php
$conn = new mysqli("localhost", "root", "", "library");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_GET['title'];
$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
$result = $conn->query($sql);

echo "<style>
    body { font-family: Arial; background-color: #f0f2f5; padding: 20px; }
    table { border-collapse: collapse; width: 100%; background: #fff; }
    th, td { border: 1px solid #ddd; padding: 8px; }
    th { background-color: #4CAF50; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    a { display: inline-block; margin-top: 15px; }
</style>";

if ($result->num_rows > 0) {
    echo "<h2>📚 Search Results for \"$title\"</h2>";
    echo "<table>
            <tr>
                <th>Accession No</th>
                <th>Title</th>
                <th>Authors</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['accession_no']}</td>
                <td>{$row['title']}</td>
                <td>{$row['authors']}</td>
                <td>{$row['edition']}</td>
                <td>{$row['publisher']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>❌ No books found with the title \"$title\"</p>";
}

echo "<a href='index.html'>⬅ Back to Home</a>";

$conn->close();
?>
