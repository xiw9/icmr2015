<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Registration | ACM ICMR 2015 | Shanghai, China</title>

<script type="text/javascript">
function validateForm() {
    var x = document.forms["register"]["email"].value;
    if (x == null || x == "") {
        alert("Email must be filled out.");
        return false;
    }
    var x = document.forms["register"]["first_name"].value;
    var y = document.forms["register"]["last_name"].value;
    if (x == null || x == ""||y == null || y == "") {
        alert("Name must be filled out.");
        return false;
    }
}
</script>

</head>
<body>
  <?php include 'php/navbar.php' ?>
  <div class="ord-header">
    <img class="img-responsive" src="img/header.jpg" alt="Scenery of Shanghai">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title">Registration</h1>
          </div>
          <div class="panel-body" >
<div class="well">
<p>Note: the payment system only supports Microsoft IE. We realized that this may cause trouble for some participants but do not have other better option. Please try to find a Windows computer to process the payment. If you cannot find one, please finish this form and send an email with your registration ID to <a href="mailto:acmicmr2015@gmail.com">acmicmr2015@gmail.com</a>. We could provide a bank account to transfer the fee. </p>
</div>
<form name="register" method="post" action="checkout" onsubmit="return validateForm()">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" name="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" name="last_name">
  </div>
  <div class="form-group">
    <label for="institution">Institution</label>
    <input type="text" class="form-control" name="institution">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" name="country">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label for="phone">Member Type: </label>
      <label class="radio-inline">
        <input type="radio" name="member_type" value="1" checked> ACM Member
      </label>
      <label class="radio-inline">
        <input type="radio" name="member_type" value="2"> Non-ACM Member
      </label>
      <label class="radio-inline">
        <input type="radio" name="member_type" value="3"> Student
      </label>
  </div>
  <div class="form-group">
    <label for="member_id">Member ID (Optional if selected Non-ACM Member)</label>
    <input type="text" class="form-control" name="member_id">
  </div>
  <div class="form-group">
    <label for="reg_type">Extra Payment (Integer, in USD)</label>
    <input type="text" class="form-control" name="reg_type">
  </div>
  <div class="form-group">
    <label for="paper">Purpose (In english, less than 100 chars)</label>
    <input type="text" class="form-control" name="paper" maxlength="100">
  </div>
  <button type="submit" class="btn btn-info">Next</button>
</form>            
          </div>
        </div>  
      </div>
      <div class="col-md-3">
      <?php include 'php/sidebar.php' ?>
      </div>
    </div>
    <hr class="featurette-divider">
  </div><!-- /.container -->
  <?php include 'php/footer.php' ?>


</body>
</html>