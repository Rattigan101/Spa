<?php
    $title = 'Edit Data';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/db_con.php'; 

    $result = $crud->getGender();
    if(!isset($_GET['id']))
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $appointment = $crud->getAppointmentsDetails($id);       
?>
   <h1 class = "text-center">Edit Data</h1>
    <form method = "post" action ="editpost.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $appointment['appointment_id'] ?>" />   
<br>
<form>
<div class="form-row">
    <div class="col">
        <label for="firstname">First name</label>
        <input required type="text" class="form-control" value="<?php echo $appointment['firstname'] ?>" id="firstname" name="firstname">
    </div>
    <div class="col">
        <label for="lastname">Last name</label>
        <input required type="text" class="form-control" value="<?php echo $appointment['lastname'] ?>" id="lastname" name="lastname">
    </div>
</div>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input required type="email" class="form-control" value="<?php echo $appointment['email'] ?>" id="email" name="email" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group col-md-6">
      <label for="servicename">Name of Service</label>
      <input required type="text" class="form-control" value="<?php echo $appointment['servicename'] ?>" id="servicename" name="servicename">
    </div>
  </div>
  <div class="form-group">
    <label for="clientaddress">Address</label>
    <input required type="text" class="form-control" value="<?php echo $appointment['clientaddress'] ?>" id="clientaddress" name="clientaddress">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="appointmentdate">Appointment Date</label>
      <input type="date" class="form-control" value="<?php echo $appointment['appointmentdate'] ?>"id="appointmentdate" name="appointmentdate">
    </div>
    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
      <select class="form-control" value="<?php echo $appointment['gender'] ?>" id="gender" name="s">
                <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['gender_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
            </select>      
    </div>
  </div>
  <br><br>
    <textarea rows="6" placeholder="Message" required="" class="form-control"></textarea>
  <br>
  <button type="submit" class="btn btn-outline-danger  shadow-sm btn-block mt-3 font-weight-bold">Save Changes</button>
</form>
<?php }?>
<br>
<br>    
<?php require_once 'includes/footer.php'; ?>