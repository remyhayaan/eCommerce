<?php
header("Content-Type: application/json");

include('../db/db.php');

// Define the folder where images are stored
$image_folder = "../images/";

// Fetch banners
$sql = "SELECT id, image_url, link, title, description FROM banners ORDER BY id DESC";
$result = $conn->query($sql);

$banners = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Append the folder path to the image filename
        $row['image_url'] = $image_folder . $row['image_url'];
        $banners[] = $row;
    }
}

echo json_encode(["status" => "success", "banners" => $banners]);

$conn->close();
?>
