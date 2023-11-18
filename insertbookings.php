<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photostudio";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["FullName"];
    $phoneNumber = $_POST["PhoneNumber"];
    $serviceName = $_POST["ServiceName"];
    $email = $_POST["Email"];
    $date = $_POST["date"];
    $location = $_POST["Location"];

    // Assuming you have a table named 'services'
    // Retrieve the ServiceID based on the selected ServiceName
    $serviceQuery = "SELECT ServiceID FROM services WHERE ServiceName = '$serviceName'";
    $serviceResult = $conn->query($serviceQuery);

    if ($serviceResult->num_rows > 0) {
        $serviceRow = $serviceResult->fetch_assoc();
        $serviceID = $serviceRow["ServiceID"];

        // Now, insert the reservation with the correct ServiceID and email
        $sql = "INSERT INTO bookings (FullName, PhoneNumber,  ServiceID,Email, Date, Location)
                VALUES ('$fullName', '$phoneNumber', '$serviceID', '$email','$date', '$location')";

        if ($conn->query($sql) === TRUE) {
             header("Location: submitbookings.php");
        exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Service not found.";
    }
}

// Close the database connection
$conn->close();
?>

