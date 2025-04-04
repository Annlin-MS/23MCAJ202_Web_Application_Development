<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #0073e6;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>List of Indian Cricket Players</h2>

<table>
    <tr>
        <th>Serial No.</th>
        <th>Player Name</th>
    </tr>

    <?php
    // Step 1: Store cricket player names in an array
    $players = ["Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Rahul Dravid", "Sourav Ganguly", "Kapil Dev", "Sunil Gavaskar", "Jasprit Bumrah", "Ravindra Jadeja"];

    // Step 2: Loop through the array and display in table
    $serial_no = 1;
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>$serial_no</td>";
        echo "<td>$player</td>";
        echo "</tr>";
        $serial_no++;
    }
    ?>

</table>

</body>
</html>
