<?php
include_once("register.config.php");

$email = $first_name = $last_name = "";
$institution = $address = $city = $country = $phone = "";
$reg_type = $member_type = 0;
$member_id = $paper = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = test_input($_POST["email"]);
  $first_name = test_input($_POST["first_name"]);
  $last_name = test_input($_POST["last_name"]);
  $institution = test_input($_POST["institution"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $country = test_input($_POST["country"]);
  $phone = test_input($_POST["phone"]);
  $reg_type = intval(test_input($_POST["reg_type"]));
  $member_type = intval(test_input($_POST["member_type"]));
  $member_id = test_input($_POST["member_id"]);
  $paper = test_input($_POST["paper"]);

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      echo("Mysql Connection Error");
  } 

  $sql = sprintf("INSERT INTO `icmr2015`.`registration` (email, first_name, last_name, 
    `institution`, `address`, `city`, `country`, `phone`, `member_type`, `member_id`, `reg_type`, `paper`) 
  VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d', '%s')",
    $email, $first_name, $last_name, $institution, $address, $city, $country, $phone, $member_type, 
    $member_id, $reg_type, $paper);

  $reg_id=0;
  $reg_longid="";
  if (mysqli_query($conn, $sql)) {
      $reg_id=mysqli_insert_id($conn);
      $sql = sprintf("SELECT `id`, `date`, `email`, `member_type`, `reg_type` FROM `icmr2015`.`registration` WHERE `id`='%d'", $reg_id);
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $date = date("YmdGis", strtotime($row["date"]));
          $reg_longid=sprintf("%s%d",$date,$reg_id%10);
          $reg_type=$row["reg_type"];
          $member_type=$row["member_type"];
          if (strcmp($email, $row["email"]) !==0){
            echo("Mysql Error");
          }
      } else {
          echo("Mysql Error");
      }
  } else {
      echo("Mysql Error");
  }
  mysqli_close($conn);

}

function test_input($data) {
  $data = mysql_real_escape_string($data);
  return $data;
}

?>