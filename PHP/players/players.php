<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<?php
// Array of Indian cricket players
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "KL Rahul",
    "Shubman Gill",
    "Hardik Pandya",
    "Rishabh Pant",
    "Suryakumar Yadav",
    "Mohammed Shami"
);
?>

<table>
    <tr>
        <th>Sl. No</th>
        <th>Player Name</th>
    </tr>
    <?php
    // Loop through array and display each player in a table row
    foreach ($players as $index => $player) {
        echo "<tr>";
        echo "<td>" . ($index + 1) . "</td>";
        echo "<td>" . $player . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
