<?php
$servername = "localhost";
$username = "root";//root
$password = "";//Password always blank in localhost
$dbname = "learn";//database name


$conn = new mysqli($servername, $username, $password, $dbname);
//Database connection agar fail hogya toh reason pta chalega
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$age=$_POST['age'];
//change accordingly column name insert karro
if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($gender) && !empty($age))
{
  
$sql = "INSERT INTO learn()
VALUES ('$firstname','$lastname','$email','$gender','$age')";
//values maun uppar jo variable hai
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
 
}
else{
  echo "these fields cant b empty";
}

$conn->close();
?>