<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Registration | ACM ICMR 2015 | Shanghai, China</title>
</head>
<body>
  <?php include 'php/register-miscs.php' ?>
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
            <p>The first step of your registration is now a 'success', now you can complete the second step (the payment step), If there is any problem with the registration information, please contact <a href='mailto:xwang10@fudan.edu.cn' ><b>us.</b></a></p>
            <hr>
            <p>Registration ID: <?php echo($reg_longid); ?></p>
            <p>Name: <?php echo($first_name.$last_name); ?></p>
            <p>Email: <?php echo($email); ?></p>
            <p>Registration Type:  <?php case($reg_type) {case 1: echo("Main Conference"); break; case 2: echo("Workshops"); break; case 3: echo("Tutorials"); break; echo("Error, please try again.");} ?></p>
            <p>Member Type: <?php case($member_type) {case 1: echo("ACM Member"); break; case 2: echo("Non-ACM Member"); break; case 3: echo("Student"); break; echo("Error, please try again.");} ?></p>

          </div>
        </div>  
      </div>
      <div class="col-md-3">
      <?php include 'php/sidebar.php' ?>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
  <?php include 'php/footer.php' ?>
</body>
</html>