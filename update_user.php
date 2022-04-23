<!-- this code will simply execute query to update row -->
<?php require "db_connection.php" ?>


<?php

$error = $name = $email = $password = $message = $country = "";

// check if we get request (called on submit)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  function clean_inputs($field){
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
  }

// get values of sended inputs
$id = clean_inputs($_POST['id']);
$name = clean_inputs($_POST['name']);
$email = clean_inputs($_POST['email']);
$password = clean_inputs($_POST['password']);
$country = clean_inputs($_POST['country']);


// if(isset($name) && $name != "" && isset($email) && $email != "" && isset($password) && $password != "" && isset($country) && $country != ""){
  // echo "string";

  $sql = "Update users set user_name = '$name', user_email = '$email', user_password = '$password', user_country = '$country' where user_id = $id ";
  if ($connection->query($sql) === TRUE) {
    echo "Record has been updated Successfully";
  }else{
    echo "Error in updating: ".$connection->error;
  }

  $connection->close();


}
 ?>
