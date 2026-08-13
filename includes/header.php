<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Management System</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container"> 
        <a href="../dashboard.php" class="navbar-brand">Internship Management System</a>
        <?php 
        if (isLoggedIn()):
         ?>
         <div class="navbar-nav ms-auto">
            <a href="../dashboard.php" class="nav-link">Dashboard</a>
            <a href="../interns/index.php" class="nav-link">Interns</a>
            <a href="../projects/index.php" class="nav-link">Projects</a>
            <a href="../attendance/index.php" class="nav-link">Attendance</a>
            <a href="../auth/logout.php" class="nav-link">Logout</a>
         </div>
        <?php endif ?>
    </div>
</nav>

<div class="container">

