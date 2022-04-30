
<?php

$hostname = "localhost";
$username = "shop";
$password = "ff";
$db = "shopping_list";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}


$sqlquery = "INSERT INTO table items 
    ('John', 'Doe', 'john@example.com')"
  
if ($dbconnect->query($sql) === true) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
