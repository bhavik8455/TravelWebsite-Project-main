<?php
// Start session (if needed)
session_start();

// Database connection
$servername = "localhost"; // or your server
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "travel1"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variable
$message = "";

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $studentName = $_POST['student_name'];
    $studentEmail = $_POST['student_email'];
    $dateOfTravel = $_POST['date_of_travel'];
    $numberOfDays = $_POST['number_of_days'];
    $collegeName = $_POST['college_name'];
    $branch = $_POST['branch'];
    $hodEmail = $_POST['hod_email'];
    $contactDetails = $_POST['contact_details'];

    // Prepare an SQL statement for execution
    $stmt = $conn->prepare("INSERT INTO Details (StudentName, StudentEmail, DateOfTravel, NumberOfDays, CollegeName, Branch, HodEmail, ContactDetails) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if statement preparation was successful
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind variables to a prepared statement as parameters
    $stmt->bind_param("sssissss", $studentName, $studentEmail, $dateOfTravel, $numberOfDays, $collegeName, $branch, $hodEmail, $contactDetails);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the home page after successful submission
        header("Location: home.php"); // Change 'home.php' to your actual home page
        exit(); // Terminate script execution
    } else {
        $message = "Error submitting details: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px #00f0ff, 0 0 30px #00bfff;
            width: 100%;
            max-width: 500px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #00f0ff;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #00f0ff;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            box-sizing: border-box;
            /* Ensure padding is included in width */
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #00bfff;
            outline: none;
            background: rgba(0, 0, 0, 0.2);
        }

        .submit-button {
            background: #00f0ff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        .submit-button:hover {
            background: #00bfff;
        }

        .message {
            margin-top: 20px;
            color: #00f0ff;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>Travel Details</h1>

        <form method="POST" action="">
            <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text" id="student_name" name="student_name" required>
            </div>

            <div class="form-group">
                <label for="student_email">Student Email</label>
                <input type="email" id="student_email" name="student_email" required>
            </div>

            <div class="form-group">
                <label for="date_of_travel">Date of Travel</label>
                <input type="date" id="date_of_travel" name="date_of_travel" required>
            </div>

            <div class="form-group">
                <label for="number_of_days">Number of Days</label>
                <input type="number" id="number_of_days" name="number_of_days" required min="1">
            </div>

            <div class="form-group">
                <label for="college_name">College Name</label>
                <input type="text" id="college_name" name="college_name" required>
            </div>

            <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" id="branch" name="branch" required>
            </div>

            <div class="form-group">
                <label for="hod_email">HOD Email</label>
                <input type="email" id="hod_email" name="hod_email" required>
            </div>

            <div class="form-group">
                <label for="contact_details">Contact Details (Students)</label>
                <textarea id="contact_details" name="contact_details" rows="4" required></textarea>
            </div>

            <button type="submit" class="submit-button">Submit</button>
        </form>

        <?php if ($message) { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>
    </div>

</body>

</html>