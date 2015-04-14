<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Registration | ACM ICMR 2015 | Shanghai, China</title>
</head>
<body>
  <?php include 'php/callback-miscs.php' ?>
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
                <tr><td>Registration ID:</td><td><?php echo($orderno);?></td></tr>
                <tr><td>Email: </td><td><?php echo($email); ?></td></tr>
                <tr><td>Payment: </td><td>$<?php echo($priceusd); ?> USD</td></tr>
                <tr><td>Result: </td><td><?php echo($success); ?></td></tr>
              </table>
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
  </div><!-- /.container -->
  <?php include 'php/footer.php' ?>
</body>
</html>