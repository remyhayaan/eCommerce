<?php
header('Content-Type: application/json'); // Set the content type to JSON
include('../db/db.php'); 

// SQL query to fetch categories
$query = "SELECT * FROM categories ORDER BY created_at DESC"; 
$result = $conn->query($query);

$categories = array(); 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row; 
    }
}

echo json_encode($categories); // Return the categories as JSON
$conn->close(); 
?>