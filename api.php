<?php
include "conn.php";

$type = $_POST['type'];

if($type == "store"){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $day =$_POST['day'];
    $gender =$_POST['gender'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    
    
$sql = "INSERT INTO `t_data`( `name`, `email`, `day`, `gender`, `city`, `state`) VALUES ('$name','$email','$day','$gender','$city','$state')";

if ($conn->query($sql) === TRUE) {
    echo json_encode("New record created successfully");
} else {
    echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}
}
if($type == "view"){
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "select * from t_data where id = $id";
    }
    else{
    $sql = "select * from t_data";
    }
    $result =mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['email'] = $row['email'];
            $response[$i]['day'] = $row['day'];
            $response[$i]['gender'] = $row['gender'];
            $response[$i]['city'] = $row['city'];
            $response[$i]['state'] = $row['state'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    else {
        echo json_encode("Data not found");
    }
    
}
if($type == "delete"){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "DELETE from t_data where id = $id";
        }
        else{
            $sql = "Delete * from t_data";
        }
        $result =mysqli_query($conn,$sql);
            echo json_encode("deleted ",JSON_PRETTY_PRINT);
        
    
}
    if($type == "update"){
        if(isset($_POST['id'])){
        $id= $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $day = $_POST['day'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $state = $_POST['state'];
                
        $sql = " UPDATE  `t_data` SET `name`='$name',`day`='$day',`gender`='$gender',`city`='$city',`state`='$state',`email`='$email' WHERE id = $id";
    }
    
    $result =mysqli_query($conn,$sql);
            echo json_encode("updated ",JSON_PRETTY_PRINT);
        
}


