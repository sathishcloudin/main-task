<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_data";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
      $name =$_POST['name'];
      $email =$_POST['email'];
      $day =$_POST['day'];
      $gender =$_POST['gender'];
      $city =$_POST['city'];
      $state =$_POST['state'];
      
      
$sql = "INSERT INTO `t_data`( `name`, `email`, `day`, `gender`, `city`, `state`) VALUES ('$name','$email','$day','$gender','$city','$state')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>