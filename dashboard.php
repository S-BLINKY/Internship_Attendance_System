<?php
require_once __DIR__ .'/includes/auth_chek.php';
require_once __DIR__ .'/config/database.php';

//Count active interns 
$result = mysqli_query($conn, "SELECT COUNT(*)as total FROM interns WHERE status= 'active'");
$row = mysqli_fetch_assoc($result);
$total_interns = $row['total'];

//count today's attendance 
$today = date('Y-m-d');
$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM attendance WHERE attendance_date ='$today'");
 
$row= mysqli_fetch_assoc($result);
$today_attendance = $row['total'];

?>

<?php 
include __DIR__ .'/includes/header.php';
?>

<h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
<p class="text-muted">Internship Management System Dashboard</p>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Active Interns</h5>
                <p class="card-text display-6"><?php echo $total_interns; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Today's Attendance Records</h5>
                <p class="card-text display-6"> <?php echo $today_attendance; ?></p>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ .'/includes/footer.php'; ?>