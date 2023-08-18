<?php
// Validate and process form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate input (you can implement your validation rules here)

    // Insert data into the database
    $servername = "your_server_name";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ip_address = $_SERVER["REMOTE_ADDR"];
    $timestamp = date("Y-m-d H:i:s");

    $sql = "INSERT INTO contact_form (fullname, phone, email, subject, message, ip_address, timestamp)
            VALUES ('$fullname', '$phone', '$email', '$subject', '$message', '$ip_address', '$timestamp')";

    if ($conn->query($sql) === TRUE) {
        // Send email notification to site owner (you'll need to implement this)
        // Provide success confirmation to the user
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>