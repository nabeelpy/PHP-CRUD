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

// when page redirect we get values of inputs by inputs_name
// get values of sended inputs by inputs_name
$name = clean_inputs($_POST['name']);
$email = clean_inputs($_POST['email']);
$password = clean_inputs($_POST['password']);
$country = clean_inputs($_POST['country']);

// make query
  $sql = "INSERT INTO users(user_name, user_email, user_password, user_country) VALUES('$name', '$email', '$password', '$country')";

  // execute query and show results or error
  if ($connection->query($sql) === TRUE) {
    echo "Thanks for creating Account";
  }else{
    echo "Error in inserting: ".$connection->error;
  }


}
 ?>


<!-- ============================================== -->
                <!-- HTML STARTED -->
<!-- ============================================== -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Contact V1</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
  </head>
  <!-- CSS only -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="public/vendors/scripts/jquery.min.2.2.1.js"></script>
<script src="public/vendors/scripts/jquery.min3.3.1.js"></script>
<script src="public/vendors/scripts/jquery-1.3.2.js"></script>

  <body>


    <!-- ============================================== -->
                    <!-- NAVBAR -->
    <!-- ============================================== -->
    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#">CRUD PHP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <!-- just pass file path to link with page -->
            <a class="nav-link" href="index.php">Register Account <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <!-- just pass file path to link with page -->
            <a class="nav-link" href="Watch_Tables.php">Watch Tables</a>
          </li>
        </ul>

      </div>
    </nav>



    <!-- ============================================== -->
                    <!-- BODY -->
    <!-- ============================================== -->
    <div class="contact1">
  		<div class="container-contact1">
  			<div class="contact1-pic js-tilt" data-tilt>
  				<img src="images/img-01.png" alt="IMG">
  			</div>

<!-- if want to send code to contact.php file -->
  			<!-- <form action="contact.php" method="post" class="contact1-form validate-form"> -->

        <!-- we will send code to same page -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="contact1-form validate-form">

  				<span class="contact1-form-title">
  					Register Account
  				</span>

  				<!-- <div class="wrap-input1 validate-input" data-validate = "Name is required"> -->
            <div class="wrap-input1">

  					<input class="input1" type="text" name="name" value="" placeholder="Name">
  					<span class="shadow-input1"></span>
  				</div>

  				<div class="wrap-input1">
  					<!-- <input class="input1" type="email" name="email" placeholder="Email"> -->
            <input class="input1" type="text" name="email" value="" placeholder="Email">
  					<span class="shadow-input1"></span>
  				</div>

  				<div class="wrap-input1">
  					<input class="input1" type="password" name="password" value="" placeholder="Password">
  					<span class="shadow-input1"></span>
  				</div>

          <div class="wrap-input1">
            <!-- <input class="input1" type="url" name="website" placeholder="Website"> -->
            <input class="input1" type="text" name="country" value="" placeholder="Country">
            <span class="shadow-input1"></span>
          </div>

  				<div class="wrap-input1">
  					<textarea class="input1" name="message" placeholder="Message" value=""></textarea>
  					<span class="shadow-input1"></span>
  				</div>








<!-- changed end -->

  				<div class="container-contact1-form-btn">
  					<button class="contact1-form-btn">
  						<span>
  							Register
  							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  						</span>
  					</button>





  				</div>
  			</form>

  		</div>
  	</div>


  <!--===============================================================================================-->
  	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/bootstrap/js/popper.js"></script>
  	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/tilt/tilt.jquery.min.js"></script>
  	<script >
  		$('.js-tilt').tilt({
  			scale: 1.1
  		})
  	</script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

  <!--===============================================================================================-->
  	<script src="js/main.js"></script>



  </body>
</html>
