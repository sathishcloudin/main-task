<?php
$con = mysqli_connect("localhost","root","","task_data");
$response = array();
if($con){
    $sql ="select * from t_data";
    $result =mysqli_query($con,$sql);
    if($result){
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
   
}
else{
    echo "database connection failed";
}
?>