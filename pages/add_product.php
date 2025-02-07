<?php
include('../db/db.php'); 

// Fetch categories
$categoryQuery = "SELECT category_id, name FROM categories";
$categories = $conn->query($categoryQuery);

// Fetch subcategories
$subcategoryQuery = "SELECT subcategory_id, name, category_id FROM subcategories";
$subcategories = $conn->query($subcategoryQuery);
?>

<form action="add_product.php" method="post" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Description:</label>
    <textarea name="description" required></textarea><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" required><br>

    <label>Discount:</label>
    <input type="number" name="discount"><br>

    <label>Stock Quantity:</label>
    <input type="number" name="stock_quantity" required><br>

    <label>Category:</label>
    <select name="category_name" required>
        <option value="">Select Category</option>
        <?php while ($row = $categories->fetch_assoc()): ?>
            <option value="<?php echo htmlspecialchars($row['name']); ?>"><?php echo htmlspecialchars($row['name']); ?></option>
        <?php endwhile; ?>
    </select><br>

    <label>Subcategory:</label>
    <select name="subcategory_name" required>
        <option value="">Select Subcategory</option>
        <?php while ($row = $subcategories->fetch_assoc()): ?>
            <option value="<?php echo htmlspecialchars($row['name']); ?>"><?php echo htmlspecialchars($row['name']); ?></option>
        <?php endwhile; ?>
    </select><br>

    <label>Main Image:</label>
    <input type="file" name="main_image" required><br>

    <button type="submit">Add Product</button>
</form>
<!-----PHP script or handling the form---->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $stock_quantity = $_POST['stock_quantity'];
    $category_name = $_POST['category_name'];
    $subcategory_name = $_POST['subcategory_name'];

    // Get category ID
    $categoryIdQuery = "SELECT category_id FROM categories WHERE name = '$category_name'";
    $categoryResult = $conn->query($categoryIdQuery);
    $category_id = $categoryResult->fetch_assoc()['category_id'];

    // Get subcategory ID
    $subcategoryIdQuery = "SELECT subcategory_id FROM subcategories WHERE name = '$subcategory_name'";
    $subcategoryResult = $conn->query($subcategoryIdQuery);
    $subcategory_id = $subcategoryResult->fetch_assoc()['subcategory_id'];

    // Image upload handling
    $targetDir = "../uploads/";
    $fileName = basename($_FILES["main_image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allowed file types
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES["main_image"]["tmp_name"], $targetFilePath)) {
            // Insert product into database
            $sql = "INSERT INTO products 
                (name, description, price, discount, stock_quantity, main_image, category_id, subcategory_id, created_at, updated_at) 
                VALUES 
                ('$name', '$description', '$price', '$discount', '$stock_quantity', '$fileName', '$category_id', '$subcategory_id', NOW(), NOW())";

            if ($conn->query($sql) === TRUE) {
                echo "Product added successfully!";
                header("Location: product_list.php?success=1");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG & GIF allowed.";
    }
}
$conn->close();
?>