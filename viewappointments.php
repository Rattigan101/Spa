<?php
    $title = 'View Appointments';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/db_con.php'; 

    // Get all attendees
    $result = $crud->getAppointments();
?>
 <h2 class="text-center">Appointment List</h2>
    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Name of Service</th>
            <th>Address</th>
            <th>Appointment Date</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['appointment_id']?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>
                <td><?php echo $r['email']?></td>
                <td><?php echo $r['servicename']?></td>
                <td><?php echo $r['clientaddress']?></td>
                <td><?php echo $r['appointmentdate']?></td>
                <td><?php echo $r['name']?></td>
                
                <td>
                    <a href="view.php?id=<?php echo $r['appointment_id']?>" class="btn btn-info">View</a>
                    <a href="edit.php?id=<?php echo $r['appointment_id']?>" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Are you sure you to delete this record?');"
                    href="delete.php?id=<?php echo $r['appointment_id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>