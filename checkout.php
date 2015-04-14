<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Registration | ACM ICMR 2015 | Shanghai, China</title>
</head>
<body>
  <?php include 'php/register-miscs.php' ?>
  <?php include 'php/payment-miscs.php' ?>
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
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-striped">
                <tr><td>Registration ID:</td><td><?php echo($reg_longid);?></td></tr>
                <tr><td>Name:</td><td><?php echo($first_name." ".  $last_name); ?></td></tr>
                <tr><td>Email: </td><td><?php echo($email); ?></td></tr>
                <tr><td>Registration Type: </td><td><?php echo($reg_type_str); ?></td></tr>
                <tr><td>Member Type: </td><td><?php echo($member_type_str); ?></td></tr>
                <tr><td>Price: </td><td><b>$<?php echo($price); ?></b></td></tr>
              </table>
              <form action="https://payment.ChinaPay.com/pay/TransGet" METHOD="post">
                <?php echo($def_url); ?>
              </form>

            </div>
            <div class="col-md-2"></div>
            </div>


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