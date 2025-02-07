<?php
include('../db/db.php'); 

// Initialize message variables
$success = $error = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $name = $firstname . ' ' . $lastname;  
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    
    // Form validation
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($phone)) {
        $error = "All fields are required!";
    } else {
        // Check if email already exists
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Email already registered.";
        } else {
           
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_query = "INSERT INTO users (name, email, password, phone, created_at, updated_at) 
                             VALUES (?, ?, ?, ?, NOW(), NOW())"; 
            $insert_stmt = $conn->prepare($insert_query);
            if ($insert_stmt === false) {
                die('Prepare failed: ' . $conn->error);
            }
            $insert_stmt->bind_param("ssss", $name, $email, $hashed_password, $phone);

            if ($insert_stmt->execute()) {
                $success = "Account created successfully! Please sign in.";
            } else {
                $error = "There was an error creating your account. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php if (!empty($success)) { ?>
    <script>
        swal({
            title: "Success!",
            text: "<?php echo $success; ?>",
            icon: "success",
            button: "OK"
        }).then(() => {
            window.location.href = '../pages/signin.html'; // Redirect after clicking OK
        });
    </script>
<?php } ?>

<?php if (!empty($error)) { ?>
    <script>
        swal({
            title: "Error!",
            text: "<?php echo $error; ?>",
            icon: "error",
            button: "Try Again"
        });
    </script>
<?php } ?>

</body>
</html>
