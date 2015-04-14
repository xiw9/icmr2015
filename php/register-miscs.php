<?php
include_once("register.config.php");

$email = $first_name = $last_name = "";
$institution = $address = $city = $country = $phone = "";
$reg_type = $member_type = 0
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
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = sprintf("INSERT INTO `icmr2015`.`registration` (`email`, `first_name`, `last_name`, 
    `institution`, `address`, `city`, `country`, `phone`, `member_type`, `member_id`, `reg_type`, `paper`) 
  VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d', '%s')",
    $email, $first_name, $last_name, $institution, $address, $city, $country, $phone, $member_type, 
    $member_id, $reg_type, $paper);

  $reg_id=0;
  if (mysqli_query($conn, $sql)) {
      $reg_id=mysqli_insert_id($conn);
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

}

function test_input($data) {
  $data = mysql_real_escape_string($data);
  return $data;
}

?>