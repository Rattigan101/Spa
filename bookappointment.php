<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/db_con.php'; 
    $result = $crud->getAppointments();
?>
  <!-- First Name, Last Name
     Email Address
     Gender
     Address
     Profile Picture
-->
<h1 class = "text-center">Request a Service</h1>
<form method = "post" action ="success.php" enctype="multipart/form-data">
<br>
<div class="form-row">
    <div class="col">
    <label for="firstname">First name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="col">
    <label for="lastname">Last name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
  </div>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group col-md-6">
      <label for="servicename">Name of Service</label>
      <input required type="text" class="form-control" id="servicename" name="servicename">
    </div>
        </div>
  <div class="form-group">
    <label for="clientaddress">Address</label>
    <input required type="text" class="form-control" id="clientaddress" name="clientaddress">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="appointmentdate">Appointment Date</label>
      <input type="date" class="form-control" id="appointmentdate" name="appointmentdate">
    </div>  
    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
              <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['gender_id'] ?>"><?php echo $r['name']; ?></option>
              <?php }?>
             <!--<option>Male</option>
              <option>Female</option> -->
        </select>      
    </div>
  </div>
  <br>
  <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Upload Image</label>
           <small id="avatar" class="form-text text-danger"></small>  
    </div> 
    <br><br>
    <button type="submit" class="btn btn-outline-info  shadow-sm btn-block mt-3 font-weight-bold">Submit</button>
</form>
<br>   
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>