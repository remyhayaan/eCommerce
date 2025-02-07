<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.html");
    exit;
}
echo "Welcome, " . $_SESSION['user_name'];
?>
