<?php  require "db_connection.php"; ?>
<?php

// make query
 $sql="Select * from users";
 // execute query and store result in $result
 $result = $connection->query($sql);

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

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
  <body>

    <!-- ============================================== -->
                    <!-- NAVBAR -->
    <!-- ============================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">CRUD PHP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <!-- just pass file path to link with page -->
            <a class="nav-link" href="index.php">Register Account <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <!-- just pass file path to link with page -->
            <a class="nav-link" href="Watch_Tables.php">Watch Tables</a>
          </li>
        </ul>

      </div>
    </nav>




    <!-- ============================================== -->
                    <!-- Table -->
    <!-- ============================================== -->
    <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Country</th>
          <th scope="col">Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php
        // check if query is not empty
            if ($result->num_rows > 0) {
              // retrive each row of query one by one
              while ($row = $result->fetch_assoc()) {
                // code...
         ?>
        <tr>
          <th scope="row"> <?php echo $row['user_id']; ?> </th>
          <td><?php echo $row['user_name']; ?> </td>
          <td><?php echo $row['user_email']; ?> </td>
          <td><?php echo $row['user_password']; ?> </td>
          <td><?php echo $row['user_country']; ?> </td>
          <td><?php echo $row['register_date']; ?> </td>
          <!-- we will also send id within query to retrive it on next page and perform operations(update and delete) -->
          <td><a href="user_details.php?id=<?php echo $row['user_id']; ?>">Update</a>  &nbsp &nbsp &nbsp &nbsp <a href="delete_user.php?id=<?php echo $row['user_id']; ?>">Delete</a> </td>
        </tr>

<?php    }
}else { ?>
  No Records Found
<?php } ?>



      </tbody>
    </table>




  </body>
</html>
