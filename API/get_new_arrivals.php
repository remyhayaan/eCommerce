<?php
include('../db/db.php'); // Include your database connection

// Fetch the latest products (adjust the query as needed)
$query = "SELECT * FROM products ORDER BY created_at DESC LIMIT 3"; // Fetch the latest 3 products
$result = $conn->query($query);

$newArrivals = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newArrivals[] = $row; // Add each product to the array
    }
}

echo json_encode($newArrivals); // Return the new arrivals as JSON
$conn->close();
?>