<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the rating from the POST data
    $rating = $_POST['rating'];

    // Validate and sanitize the rating (you can add more validation here)
    $rating = filter_var($rating, FILTER_VALIDATE_INT, array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 5
        )
    ));

    if ($rating !== false) {
        // Database connection parameters
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "photostudio";

        // Create a new PDO instance
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Insert the rating into the database
            $stmt = $conn->prepare("INSERT INTO ratings (rating) VALUES (:rating)");
            $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
            $stmt->execute();

            // Close the database connection
            $conn = null;

            // Provide a response (you can customize this as needed)
            echo "Rating successfully inserted into the database.";
        } catch (PDOException $e) {
            // Handle any database connection errors
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Handle invalid rating value
        echo "Invalid rating value.";
    }
} else {
    // Handle cases where the form was not submitted
    echo "Form not submitted.";
}
?>

