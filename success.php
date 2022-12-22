<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/db_con.php'; 
    //require_once 'sendemail.php'; 
  
    if(isset($_POST['submit'])){
        // extract values from the $_POST array
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email']; 
        $servicename = $_POST['servicename'];
        $clientaddress = $_POST['clientaddress'];
        $appointmentdate = $_POST['appointmentdate'];
        $gender = $_POST['gender'];
        
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = "uploads/";
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);

        // call function to insert and track if successful or not
        $isSuccess = $crud->insertAppointments($firstname, $lastname, $email, $servicename, $clientaddress, $appointmentdate, $gender, $destination);
        $genderName = $crud->getGenderById($gender);

        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to New Image Day Spa', 'Your request has been submitted successfully');
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }
    }
?> 
    <!-- This prints out values using method = "get" -->
    <!--<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_GET['gender']; ?>
            </h6>
            <p class="card-text">
                Appointment Date: <?php //echo $_GET['appointmentdate']; ?>
            </p>
            <p class="card-text">
                Email Address: <?php //echo $_GET['email']; ?>
            </p>
            <p class="card-text">
                Name of Service<?php //echo $_GET['eservice']; ?>
            </p>
        </div>
    </div> -->
    <!-- This prints out values using method = "post" -->
    <img src="<?php //echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $genderName['gender']; ?>
            </h6>
            <p class="card-text">
                Email Address: <?php echo $_POST['email']; ?>
            </p>
            <p class="card-text">
                Name of Service: <?php echo $_POST['servicename']; ?>
            </p>
            <p class="card-text">
                Address: <?php echo $_POST['clientaddress']; ?>
            </p>
            <p class="card-text">
                Appointment Date: <?php echo $_POST['appointmentdate']; ?>
            </p>
                     
        </div>
    </div>   
<br>   
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>