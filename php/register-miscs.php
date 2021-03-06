<?php
include_once("register.config.php");
$price_array = array(
  array(735.0,890.0,495.0),
  array(220.0,330.0,135.0),
  array(220.0,330.0,136.0)
  );


$email = $first_name = $last_name = "";
$institution = $address = $city = $country = $phone = "";
$reg_type = $member_type = 0;
$member_id = $paper = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Mysql Connection Error");
  } 

  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
  $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
  $institution = mysqli_real_escape_string($conn, $_POST["institution"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);
  $city = mysqli_real_escape_string($conn, $_POST["city"]);
  $country = mysqli_real_escape_string($conn, $_POST["country"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $reg_type = intval(mysqli_real_escape_string($conn, $_POST["reg_type"]));
  $member_type = intval(mysqli_real_escape_string($conn, $_POST["member_type"]));
  $member_id = mysqli_real_escape_string($conn, $_POST["member_id"]);
  $paper = mysqli_real_escape_string($conn, $_POST["paper"]);


  $sql = sprintf("INSERT INTO `registration` (`email`, `first_name`, `last_name`, 
    `institution`, `address`, `city`, `country`, `phone`, `member_type`, `member_id`, `reg_type`, `paper`) 
  VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d', '%s')",
    $email, $first_name, $last_name, $institution, $address, $city, $country, $phone, $member_type, 
    $member_id, $reg_type, $paper);
  $reg_id=0;
  $reg_longid="";
  if (mysqli_query($conn, $sql)) {
      $reg_id=mysqli_insert_id($conn);
      $sql = sprintf("SELECT `id`, `date`, `email`, `member_type`, `reg_type` FROM `registration` WHERE `id`='%d'", $reg_id);
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $date = date("YmdHis", strtotime($row["date"]));
          $reg_longid=sprintf("%s%'.02d",$date,$reg_id%100);
          $paper=substr($paper,0,10);

          if (strcmp($email, $row["email"]) !==0){
            die("Mysql Error");
          }
          if ($reg_type>0 && $reg_type <4 && $member_type>0 && $member_type<4){
            $price=$price_array[$reg_type-1][$member_type-1];
          }else{
            if ($reg_type>10 && $reg_type<1000){
              $price=$reg_type;
            }else{
              if($reg_type>100000){
                $price=0.1;
              }else{
                die("Mysql Error");
              }
            }
          }

          $reg_type=$row["reg_type"];
          switch ($reg_type) {
            case 1:
              $reg_type_str = "Main Conference";
              break;
            case 2:
              $reg_type_str = "Workshops";
              break;             
            case 3:
              $reg_type_str = "Tutorials";
              break;
            $reg_type_str = "Error";
          }
         $member_type=$row["member_type"];
          switch ($member_type) {
            case 1:
              $member_type_str = "ACM Member";
              break;
            case 2:
              $member_type_str = "Non-ACM Member";
              break;             
            case 3:
              $member_type_str = "Student";
              break;
            $reg_type_str = "Error";
          }
          include 'payment-miscs.php';
      } else {
          die("Mysql Error");
      }
  } else {
      die("Mysql Error");
  }
  mysqli_close($conn);

}


?>