<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_data";


$conn = new mysqli($servername, $username, $password, $dbname);


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $day = $_POST['day'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    
    if($name == ""){
        echo json_encode("Name should nort be empty");
    }
    else if($email == ""){
        echo json_encode("Email Id not be empty");
    }
    else if($day == ""){
        echo json_encode("day Id not be empty");
    }
    else if($gender == ""){
        echo json_encode("gender Id not be empty");
    }
    else if($city == ""){
        echo json_encode("city Id not be empty");
    }
    else if($state == ""){
        echo json_encode("state Id not be empty");
    }
    else{        
        $query = mysqli_query($conn,"INSERT INTO `t_data`( `name`, `email`, `day`, `gender`, `city`, `state`) VALUES ('$name','$email','$day','$gender','$city','$state')");
        if($query){    
            echo json_encode("inserted successfuly");
            
        }
        else{
            echo json_encode("Not inseted");
        }
    }

}
$conn->close();  
?>