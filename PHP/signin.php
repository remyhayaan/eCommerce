<?php
session_start();
include('../db/db.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "All fields are required!"]);
        exit;
    }

    // Check if user exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        echo json_encode(["status" => "error", "message" => "Database error."]);
        exit;
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store user details in session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            echo json_encode(["status" => "success", "message" => "Login successful!", "redirect" => "../pages/dashboard.php"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid email or password."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "No account found with this email."]);
    }

    $stmt->close();
    $conn->close();
}
?>
