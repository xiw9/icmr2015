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
    var x = document.forms["register"]["member_id"].value;
    var y = document.forms["register"]["member_type"].value;
    if ((y==1  || y==3) && (x == null || x == "")) {
        alert("ACM ID or Student ID must be filled out.");
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
    <input type="text" class="form-control" name="member_id">
  </div>
  <div class="form-group">
    <label for="paper">Paper ID (Optional)</label>
    <select class="form-control" name="paper">
      <option> </option>
      <option>icmr001</option>
      <option>icmr003s</option>
      <option>icmr004s</option>
      <option>icmr015</option>
      <option>icmr018</option>
      <option>icmr023</option>
      <option>icmr026</option>
      <option>icmr029</option>
      <option>icmr030s</option>
      <option>icmr033</option>
      <option>icmr037s</option>
      <option>icmr038s</option>
      <option>icmr039s</option>
      <option>icmr049</option>
      <option>icmr051</option>
      <option>icmr052s</option>
      <option>icmr053</option>
      <option>icmr057s</option>
      <option>icmr058</option>
      <option>icmr059s</option>
      <option>icmr060s</option>
      <option>icmr062s</option>
      <option>icmr063</option>
      <option>icmr067s</option>
      <option>icmr069</option>
      <option>icmr071</option>
      <option>icmr073</option>
      <option>icmr074</option>
      <option>icmr076s</option>
      <option>icmr078s</option>
      <option>icmr082</option>
      <option>icmr083</option>
      <option>icmr087s</option>
      <option>icmr093s</option>
      <option>icmr094</option>
      <option>icmr096ss</option>
      <option>icmr097s</option>
      <option>icmr100d</option>
      <option>icmr101</option>
      <option>icmr103s</option>
      <option>icmr105s</option>
      <option>icmr111</option>
      <option>icmr115s</option>
      <option>icmr117s</option>
      <option>icmr118</option>
      <option>icmr123</option>
      <option>icmr124s</option>
      <option>icmr125</option>
      <option>icmr126</option>
      <option>icmr127</option>
      <option>icmr128ss</option>
      <option>icmr129s</option>
      <option>icmr130</option>
      <option>icmr131</option>
      <option>icmr133</option>
      <option>icmr134s</option>
      <option>icmr135s</option>
      <option>icmr136</option>
      <option>icmr138</option>
      <option>icmr140s</option>
      <option>icmr142s</option>
      <option>icmr146s</option>
      <option>icmr148s</option>
      <option>icmr149d</option>
      <option>icmr151s</option>
      <option>icmr153d</option>
      <option>icmr158</option>
      <option>icmr161</option>
      <option>icmr162s</option>
      <option>icmr164s</option>
      <option>icmr166ss</option>
      <option>icmr173</option>
      <option>icmr176s</option>
      <option>icmr178</option>
      <option>icmr179ss</option>
      <option>icmr180s</option>
      <option>icmr181s</option>
      <option>icmr184s</option>
      <option>icmr188s</option>
      <option>icmr189</option>
      <option>icmr193s</option>
      <option>icmr198d</option>
      <option>icmr201</option>
      <option>icmr202</option>
      <option>icmr213</option>
      <option>icmr214</option>
      <option>icmr217ss</option>
      <option>icmr221s</option>
      <option>icmr222</option>
      <option>icmr223ss</option>
      <option>icmr224</option>
      <option>icmr227</option>
      <option>icmr229s</option>
      <option>icmr230s</option>
      <option>icmr231s</option>
      <option>icmr232s</option>
      <option>icmr236s</option>
      <option>icmr240</option>
      <option>icmr241</option>
      <option>icmr243s</option>
      <option>icmr244s</option>
      <option>icmr246</option>
      <option>icmr247</option>
      <option>icmr248</option>
      <option>icmr249</option>
      <option>icmr251</option>
      <option>icmr253</option>
      <option>icmr254ss</option>
      <option>icmr256d</option>
      <option>icmr257d</option>
      <option>icmr258d</option>
      <option>icmr260d</option>
      <option>icmr261d</option>
    </select>
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