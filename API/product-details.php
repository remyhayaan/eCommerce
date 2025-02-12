<?php
include('../db/db.php'); // Include your database connection

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch product details from the database using the product ID
    $query = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        // Fetch active ads
        $adQuery = "SELECT * FROM ads WHERE status = 'active' ORDER BY created_at DESC";
        $adStmt = $conn->prepare($adQuery);
        $adStmt->execute();
        $adResult = $adStmt->get_result();
        $ads = [];
        while ($ad = $adResult->fetch_assoc()) {
            $ads[] = $ad;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> - Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-details {
            text-align: center;
            padding: 20px;
        }
        .product-details h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .product-details img {
            width: 300px;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        .product-details img:hover {
            transform: scale(1.05);
        }
        .product-details p {
            font-size: 18px;
            color: #555;
        }
        .price {
            font-size: 22px;
            color: green;
            font-weight: bold;
        }
        .add-to-cart {
            background: #ff6600;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            transition: background 0.3s;
        }
        .add-to-cart:hover {
            background: #e65c00;
        }

        /* Ads Styling */
        .ads-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            text-align: center;
        }
        .ads-container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .ad {
            display: flex;
            margin: 15px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            max-width: 600px;
            background: #fff;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .ad:hover {
            transform: scale(1.05);
        }
        .ad img {
            max-width: 100px;
            height: auto;
            border-right: 1px solid #ddd;
        }
        .ad-content {
            padding: 15px;
            flex-grow: 1;
            text-align: left;
        }
        .ad-content h3 {
            font-size: 20px;
            color: #333;
        }
        .ad-content p {
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="product-details">
        <h1><?php echo $product['name']; ?></h1>
        <img src="../uploads/<?php echo $product['main_image']; ?>" alt="<?php echo $product['name']; ?>">
        <p><?php echo $product['description']; ?></p>
        <p class="price">UGX <?php echo number_format($product['price']); ?></p>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <!-- Ads Section -->
    <div class="ads-container">
        <h2>Special Offers</h2>
        <?php foreach ($ads as $ad): ?>
            <div class="ad">
                <img src="../uploads/<?php echo $ad['ad_banner']; ?>" alt="<?php echo $ad['ad_title']; ?>">
                <div class="ad-content">
                    <h3><?php echo $ad['ad_title']; ?></h3>
                    <p><?php echo $ad['ad_description']; ?></p>
                    <a href="<?php echo $ad['ad_link']; ?>" target="_blank">Learn More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

<?php
    } else {
        echo "Product not found.";
    }
}
?>
