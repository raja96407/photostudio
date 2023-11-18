<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservation Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .payment-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: left;
            text-align: center;
            position: left;
            margin-bottom: 10px; /* Adjusted gap */
        }

        .payment-button {
            background-color: #0087FF;
            color: white;
            padding: 5px 15px; /* Adjusted size */
            font-size: 10px; /* Adjusted size */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .payment-button:hover {
            background-color: #0087FF;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Adjusted gap */
        }

        /* Adjust the margin-right property to control the space between the button and text */
        .payment-container a {
            margin-right: 20px;
        }
    </style>
</head>
<body>

<section class="banner">
    <h1>CAPTURE YOUR DAY </h1>
    <div class="card-container">
        <div class="card-img">
            <!-- image here -->
        </div>

        <div class="card-content">
            <h2>Make Your Reservation</h2>

            <form action="insertbookings.php" method="post" enctype="multipart/form-data">

                <div class="form-row">
                    <input type="text" name="FullName" placeholder="Full Name">
                    <input type="text" name="PhoneNumber" placeholder="Phone Number">
                </div>

                <div class="form-row">
                    <select name="ServiceName">
                        <option value="service-select">Select Service</option>
                        <?php
                        // Connect to your database and fetch service names
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "photostudio";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT ServiceName FROM services"; // Assuming your table is named 'services'
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["ServiceName"] . "'>" . $row["ServiceName"] . "</option>";
                            }
                        }

                        $conn->close();
                        ?>
                    </select>
                    <input type="text" name="Email" placeholder="Email" required>
                </div>

                <div class="form-row">
                    <input type="Date" name="date" id="date" placeholder="Date">
                    <input type="text" name="Location" placeholder="Location">
                </div>

                <!-- Add payment button before image upload input field -->
                <div class="form-row">
                    <div class="payment-container">
                        <a href="https://rzp.io/l/KiZ1Tnu" class="payment-button">Make Payment</a>
                    </div>
                    <label for="imageUpload">Upload Payment Receipt:</label>
                    <input type="file" name="image" id="imageUpload" accept="image/*">
                </div>

                <div class="form-row">
                    <input type="submit" value="BOOK NOW">
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
