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
<form>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="john.smith@gmail.com">
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" placeholder="John">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" placeholder="Smith">
  </div>
  <div class="form-group">
    <label for="institution">Institution</label>
    <input type="text" class="form-control" id="institution" placeholder="Fudan University">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="220 Handan Rd">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" placeholder="Shanghai">
  </div>
  <div class="form-group">
    <label for="nationality">Country</label>
    <input type="text" class="form-control" id="nationality" placeholder="China">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" placeholder="+86 21 6564 2222">
  </div>
  <div class="form-group">
    <label for="phone">Registration Type</label>
      <label class="radio-inline">
        <input type="radio" name="reg_type" id="reg_type1" value="1" checked> Main Conference (including workshops and tutorials) 
      </label>
      <label class="radio-inline">
        <input type="radio" name="reg_type" id="reg_type2" value="2"> Workshops
      </label>
      <label class="radio-inline">
        <input type="radio" name="reg_type" id="reg_type3" value="3"> Tutorials
      </label>
  </div>
  <div class="form-group">
    <label for="phone">Member Type</label>
      <label class="radio-inline">
        <input type="radio" name="member_type" id="member_type1" value="1" checked> ACM Member
      </label>
      <label class="radio-inline">
        <input type="radio" name="member_type" id="member_type2" value="2"> Non-ACM Member
      </label>
      <label class="radio-inline">
        <input type="radio" name="member_type" id="member_type3" value="3"> Student
      </label>
  </div>
  <div class="form-group">
    <label for="paper1">Paper ID (Optional)</label>
    <input type="text" class="form-control" id="paper" placeholder="icmr073, icmr231s">
  </div>
  <button type="submit" class="btn btn-default">Checkout</button>
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