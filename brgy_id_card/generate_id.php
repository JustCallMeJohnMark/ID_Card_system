<!DOCTYPE html>
<html>
<head>
    <title>Generate ID Card</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* ID card styling */
        .id-card {
            width: 300px;
            height: auto;
            border: 2px solid #000;
            border-radius: 10px;
            padding: 10px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .id-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        }

        .id-card h2 {
            text-align: center;
            margin: 10px 0;
        }

        .id-card p {
            margin: 5px 0;
        }

        .id-card .details {
            margin-top: 10px;
            border-top: 1px solid #000;
            padding-top: 5px;
        }
        input[type=button] {
            width: 45%;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-right: 55%;
            margin-top: .5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=button]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ID Card</h2>
        <div class="id-card">
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

            $id = $_GET['id'];
            $sql = "SELECT * FROM residents WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Fetch data from the database and display it on the ID card
                $row = $result->fetch_assoc();
                echo "<img src='" . $row["photo"] . "' alt='Photo'>";
                echo "<h2>" . $row["first_name"] . " " . $row["last_name"] . "</h2>";
                echo "<div class='details'>";
                echo "<p>Gender: " . $row["gender"] . "</p>";
                echo "<p>Occupation: " . $row["occupation"] . "</p>";
                echo "<p>Nationality: " . $row["nationality"] . "</p>";
                echo "<p>Marital Status: " . $row["marital_status"] . "</p>";
                echo "<div class='details'>";
                echo "<p>Emergency Contact: " . $row["emergency_contact_name"] . "</p>";
                echo "<p>Contact Number: " . $row["emergency_contact_phone"] . "</p>";
                echo "</div>";
            } else {
                echo "<p>Resident not found.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <input type="button" value="Back" onclick="window.location.href='add_resident.php';">
</body>
</html>
