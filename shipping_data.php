<?php
error_reporting(0);
include 'config.php';

if (isset($_POST['Continue'])) {
    // Get the form data
    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['address']) && isset($_POST['country']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['zip_code'])) {
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);
    } else {
        // Handle the case where not all required fields are present
        echo "Error: Not all required fields are present.";
        exit();
    }

    // Insert the data into the shipping table
    $query = "INSERT INTO shipping (first_name, last_name, address, country, state, city, zip_code) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $first_name, $last_name, $address, $country, $state, $city, $zip_code);
    $stmt->execute();
    $stmt->close();

    // Close the database connection
    mysqli_close($conn);

    // Redirect back to the form
    header("Location: orderconfirm.php");
    exit();
}
?>