<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include('../db/db.php'); 

$sql = "SELECT id, name, image_url, price, old_price, discount_percentage FROM flash_sales ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);

$products = [];
while ($row = $result->fetch_assoc()) {
    // Calculate end_time (24 hours from now)
    $end_time = date("Y-m-d H:i:s", strtotime("+24 hours"));
    $row['end_time'] = $end_time;
    
    // Assuming image_url contains the image filename, prepend the path to the images folder
    $row['image_url'] = '../images/' . $row['image_url'];
    $products[] = $row;
}

echo json_encode($products);
$conn->close();
?>
