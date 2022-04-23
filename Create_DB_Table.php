<!-- code to create table -->

<!-- database connection code must be on top -->
<?php require "db_connection.php";

// make query
$sql = "CREATE TABLE users(
        user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_name VARCHAR(30) NOT NULL,
        user_email VARCHAR(30) NOT NULL,
        user_password VARCHAR(30) NOT NULL,
        user_country VARCHAR(30) DEFAULT 'N/A',
        register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// execute query and show results or error
if ($connection->query($sql) === TRUE) {
  echo "Database Table Created";
}else{
  echo "Error in creating table".$connection->error;
}

?>
