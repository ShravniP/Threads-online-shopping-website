<?php
require_once "wishlist.php";

$servername = "localhost"; // or your server IP
$username = "hrushi";
$password = "hp123";
$database = "cart"; // Remove .sql extension
$port = 3306; // Default MySQL port

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve item details from the form
    $item_name = $_POST["item_name"];
    $item_price = $_POST["item_price"];
    $quantity = $_POST["quantity"];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO cart_items (item_name, item_price, quantity) VALUES (?, ?, ?)";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $item_name, $item_price, $quantity);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Item added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Select all cart items from the database
$sql = "SELECT * FROM cart_items";
$result = $conn->query($sql);

// Check if there are any cart items
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Item Name: " . $row["item_name"] . " - Item Price: " . $row["item_price"] . " - Quantity: " . $row["quantity"] . "<br>";
    }
} else {
    echo "No items in the cart.";
}

// Close database connection
$conn->close();
?>
