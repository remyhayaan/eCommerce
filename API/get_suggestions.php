<?php
include('../db/db.php');

$query = $_GET['query'];
$suggestions = [];

// Fetch suggestions from the database
$sql = "SELECT name FROM products WHERE name LIKE ? LIMIT 5"; // Adjust table and column names
$stmt = $conn->prepare($sql);
$searchTerm = "%$query%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $suggestions[] = $row; // Add each suggestion to the array
}

echo json_encode($suggestions); // Return suggestions as JSON
$conn->close();
?>