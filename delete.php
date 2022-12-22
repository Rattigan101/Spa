<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/db_con.php';
    if(!$_GET['id']){
        include 'includes/errormessage.php';
        header("Location: viewappointments.php");
    }else{
        // Get id values
        $id = $_GET['id'];
        // Call delete function
        $result = $crud->deleteAppointments($id);
        // Redirect to list
        if($result)
        {
             header("Location: viewappointments.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
?>
