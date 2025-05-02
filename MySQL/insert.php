<?php
$conn = new mysqli("localhost", "root", "", "library");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$accession_no = $_POST['accession_no'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

$sql = "INSERT INTO books (accession_no, title, authors, edition, publisher)
        VALUES ('$accession_no', '$title', '$authors', '$edition', '$publisher')";

if ($conn->query($sql) === TRUE) {
    echo "<p>✅ Book added successfully.</p><a href='index.html'>⬅ Go Back</a>";
} else {
    echo "<p>❌ Error: " . $conn->error . "</p>";
}

$conn->close();
?>
