<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Hide overflow to prevent scrolling */
        }

        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Make the video cover the entire viewport */
            z-index: -1; /* Place the video behind the content */
        }

        .container {
            margin: 40vh 5%;
            display: flex;
            flex-direction: column; /* Change to vertical layout */
            justify-content: center; /* Align to the top */
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .success-message {
            width: 80%;
            max-width: 500px; /* Set a maximum width for the success message */
            background-color: rgba(0, 0, 0, 0.8); /* Add background opacity */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        h2 {
            font-size: 2em;
            color: gold;
            margin: 10px 0;
        }

        p {
            font-size: 1.5em;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <video id="background-video" autoplay muted loop>
        <source src="back15.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="success-message">
            <h2>Your Reservation has been successfully Done!</h2>
            <p>THANK YOU</p>
        </div>
    </div>
</body>
</html>
