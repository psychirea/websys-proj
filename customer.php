<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Customer - Crumbs & Brew</title>
    <link rel="icon" href="images/img-003.ico" type="image/x-icon">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <div class="content" style="margin-left: 250px; margin-top: 60px; padding: 20px;">
        <h1>Customer Management</h1>
        <p>Here you can view and manage customer information.</p>
        <!-- Add your customer management code here -->
    </div>
</body>
</html>
s