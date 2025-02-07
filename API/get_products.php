<?php
header('Content-Type: application/json'); 
include('../db/db.php'); 
$query = "
    SELECT p.*, c.name AS category_name 
    FROM products p 
    JOIN categories c ON p.category_id = c.category_id 
    ORDER BY p.created_at DESC
";
$result = $conn->query($query);

$products = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row; // Add each product to the array
    }
}

echo json_encode($products); // Return the products as JSON
$conn->close();
?>