<?php 
    require_once 'db/db_con.php'; 
    //Get values from post execution
    if(isset($_POST['submit'])){
        // extract values from the $_POST array
        $appintment_id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $servicename = $_POST['servicename'];
        $clientaddress = $_POST['clientaddress'];
        $appointmentdate = $_POST['appointmentdate'];
        $gender = $_POST['gender'];
        $gender = $_POST['gender'];

        //Call crud function
        $result = $crud->editAppointments($appintment_id, $firstname, $lastname, $email, $servicename, $clientaddress, $appointmentdate, $gender);
         //Redirect to index.php
         if($result){
             header("Location: viewappointments.php");
         }
         else{
            include 'includes/errormessage.php';
         }
    }
    else{
        include 'includes/errormessage.php';
    }
?>