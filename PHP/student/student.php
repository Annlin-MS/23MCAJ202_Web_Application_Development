<!DOCTYPE html>
<html>
<head>
    <title>Student Name Sorting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        pre {
            display: inline-block;
            text-align: left;
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Enter Student Names</h2>

<form method="POST">
    <label>Enter names (comma-separated):</label>
    <input type="text" name="students" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = trim($_POST["students"]);

    // Convert input string to array (split by commas)
    $students = explode(",", $input);
    
    // Trim spaces from each name and validate
    $validStudents = [];
    $errors = [];

    foreach ($students as $index => $name) {
        $name = trim($name);

        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $errors[] = "Error at position " . ($index + 1) . ": '$name' is invalid.";
        } else {
            $validStudents[] = $name;
        }
    }

    if (!empty($errors)) {
        echo "<p class='error'>" . implode("<br>", $errors) . "</p>";
    } else {
        echo "<h3>Original Student List:</h3>";
        echo "<pre>";
        print_r($validStudents);
        echo "</pre>";

        // Sort in Ascending Order (asort)
        asort($validStudents);
        echo "<h3>Sorted in Ascending Order (asort):</h3>";
        echo "<pre>";
        print_r($validStudents);
        echo "</pre>";

        // Sort in Descending Order (arsort)
        arsort($validStudents);
        echo "<h3>Sorted in Descending Order (arsort):</h3>";
        echo "<pre>";
        print_r($validStudents);
        echo "</pre>";
    }
}
?>

</body>
</html>
