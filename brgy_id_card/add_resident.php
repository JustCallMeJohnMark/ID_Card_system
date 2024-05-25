<!DOCTYPE html>
<html>
<head>
    <title>Add Resident</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
            box-sizing: border-box;
        }
        p{
            color: #ffa31a;
        }

        input[type=text], input[type=email], input[type=date], select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit], input[type=button] {
            width: 45%;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-top: .5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover, input[type=button]:hover {
            background-color: #ffa31a;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Resident</h2>
        <form action="insert_resident.php" method="post" enctype="multipart/form-data">
            <p>First Name:</p> <input type="text" name="first_name"><br>
            <p>Last Name:</p><input type="text" name="last_name"><br>
            <p>Address:</p> <input type="text" name="address"><br>
            <p>Birthdate:</p> <input type="date" name="birthdate"><br>
            <p>Email:</p> <input type="email" name="email"><br>
            <p>Phone:</p> <input type="text" name="phone"><br>
            <p>Gender:</p>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Mentally Disabled">Mentally Disabled</option>
            </select><br>
            <p>Occupation:</p> <input type="text" name="occupation"><br>
            <p>Nationality:</p> <input type="text" name="nationality"><br>
            <p>Marital Status:</p> 
            <select name="marital_status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Divorced">Divorced</option>
            </select><br>
            <p>Emergency Contact Name:</p> <input type="text" name="emergency_contact_name"><br>
            <p>Emergency Contact Phone:</p><input type="text" name="emergency_contact_phone"><br>
            <p>Photo:</p> <input type="file" name="photo"><br>
            <div class="button-container">
                <input type="submit" value="Add Resident">
                <input type="button" value="View Registered Residents" onclick="window.location.href='view_residents.php';">
            </div>
        </form>
    </div>

    <!-- The Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>New resident added successfully</p>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("successModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Function to show the modal
        function showModal() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
