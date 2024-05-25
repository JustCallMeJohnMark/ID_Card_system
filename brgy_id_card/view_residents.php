<!DOCTYPE html>
<html>
<head>
    <title>Registered Residents</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Basic table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
            color: white;
        }

        th {
            background-color: #f2f2f2;
        }

        .id-card {
            border: 1px solid #ddd;
            padding: 16px;
            margin-bottom: 16px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .id-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .id-card p {
            margin: 8px 0;
        }

        .button-container {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }

        .button-container input[type=button] {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .button-container input[type=button]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registered Residents</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "barangay_id_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM residents";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Photo</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Birthdate</th><th>Email</th><th>Phone</th><th>Gender</th><th>Occupation</th><th>Nationality</th><th>Marital Status</th><th>Emergency Contact Name</th><th>Emergency Contact Phone</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='" . $row["photo"] . "' alt='Photo' style='width:50px;height:50px;'></td>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["birthdate"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["occupation"] . "</td>";
                echo "<td>" . $row["nationality"] . "</td>";
                echo "<td>" . $row["marital_status"] . "</td>";
                echo "<td>" . $row["emergency_contact_name"] . "</td>";
                echo "<td>" . $row["emergency_contact_phone"] . "</td>";
                echo "<td><button onclick=\"window.location.href='generate_id.php?id=" . $row['id'] . "'\">Generate ID Card</button></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No residents found.</p>";
        }

        $conn->close();
        ?>
        <div class="button-container">
            <input type="button" value="Back" onclick="window.location.href='add_resident.php';">
        </div>
    </div>
</body>
</html>
