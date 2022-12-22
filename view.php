<?php
    $title = 'View Appointments';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/db_con.php'; 

    // Get attendee by id
    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'>Please check details and try again</h1>";
    } else{
        $id = $_GET['id'];
        $result = $crud->getAppointmentsDetails($id);
?>
<img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path']; ?>" class="rounded-circle" style="height:75px;width:130px">
<div class="card" style="width: 189rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['firstname'] . ' ' . $result['lastname']; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Gender:<?php echo $result['name']; ?></h6>

            <p class="card-text">
                Appointment Date: <?php echo $result['appointmentdate']; ?>
            </p>
            <p class="card-text">
                Email Address: <?php echo $result['email']; ?>
            </p>
            <p class="card-text">
                Name of Service: <?php echo $result['servicename']; ?>
            </p>
        </div>
    </div>
    <br/>
            <a href="viewappointments.php" class="btn btn-info"> Back to list</a>
            <a href="edit.php?id=<?php echo $result['appointment_id']?>" class="btn btn-secondary">Edit</a>
            <a onclick="return confirm('Are you sure you to delete this record?');"
            href="delete.php?id=<?php echo $result['appointment_id']?>" class="btn btn-danger">Delete</a>
 <?php } ?>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>