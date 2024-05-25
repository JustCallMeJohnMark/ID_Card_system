<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <style>
        .container {
            width: 50%;
            margin: auto;
            background: rgba(0,0,0,0.5);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0,0,0,0.25);
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center; /* Center-align the text */
        }

        input[type=button] {
            width: 45%;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin: 10px 2.5%; /* Adjusted margins for proper spacing */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        input[type=button]:hover {
            background-color: #ffa31a;
        }

        h2 {
            text-align: center;
        }

        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 5%;
        }
    </style>
</head>
<body>
   <div class="container">
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];
        $nationality = $_POST['nationality'];
        $marital_status = $_POST['marital_status'];
        $emergency_contact_name = $_POST['emergency_contact_name'];
        $emergency_contact_phone = $_POST['emergency_contact_phone'];

        // Handle file upload
        $photo = $_FILES['photo']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo);
        
        // Check if the upload directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
            $sql = "INSERT INTO residents (first_name, last_name, address, birthdate, email, phone, gender, occupation, nationality, marital_status, emergency_contact_name, emergency_contact_phone, photo)
            VALUES ('$first_name', '$last_name', '$address', '$birthdate', '$email', '$phone', '$gender', '$occupation', '$nationality', '$marital_status', '$emergency_contact_name', '$emergency_contact_phone', '$target_file')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('New resident added successfully');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<h2>Sorry, there was an error uploading your file.</h2>";
        }
    }

    $conn->close();
    ?>
    <div class="button-container">
        <input type="button" value="Back" onclick="window.location.href='add_resident.php';">
        <input type="button" value="View Registered Residents" onclick="window.location.href='view_residents.php';">
    </div>
   </div>
</body>
</html>
