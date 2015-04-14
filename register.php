<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Registration | ACM ICMR 2015 | Shanghai, China</title>
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
<form method="post" action="checkout">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="john.smith@gmail.com">
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="John">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Smith">
  </div>
  <div class="form-group">
    <label for="institution">Institution</label>
    <input type="text" class="form-control" name="institution" placeholder="Fudan University">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="220 Handan Rd">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" placeholder="Shanghai">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" name="country" placeholder="China">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="+86 21 6564 2222">
  </div>
  <div class="form-group">
    <label for="phone">Registration Type: </label>
      <label class="radio-inline">
        <input type="radio" name="reg_type" value="1" checked> Main Conference (including workshops and tutorials) 
      </label>
      <label class="radio-inline">
        <input type="radio" name="reg_type" value="2"> Workshops
      </label>
      <label class="radio-inline">
        <input type="radio" name="reg_type" value="3"> Tutorials
      </label>
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
    <label for="member_id">Member ID (Optional if selected Non-ACM Member before)</label>
    <input type="text" class="form-control" name="member_id" placeholder="">
  </div>
  <div class="form-group">
    <label for="paper">Paper ID (Optional)</label>
    <input type="text" class="form-control" name="paper" placeholder="icmr073, icmr231s">
  </div>
  <button type="submit" class="btn btn-info">Checkout</button>
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