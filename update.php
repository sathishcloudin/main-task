<?php


if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "task_data";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
  
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $day = $_POST['day'];
   $gender = $_POST['gender'];
   $city = $_POST['city'];
   $state = $_POST['state'];
           
   $query = " UPDATE `t_data` SET `name`='$name',`day`='$day',`gender`='$gender',`city`='$city',`state`='$state',`email`='$email' WHERE 1";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

       <title> </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="update.php" method="post">

        name : <input type=text name="name"required ><br><br>
email :<input type=text name="email"required ><br><br>
<label for="birthday" >Birthday:</label>
<input type="date" birthday="birthday" name="day" ></br>
<br>
  <br> gender :</br>
     <input type="radio" name="gender" value="male" checked> Male<br>
     <input type="radio" name="gender" value="female"> Female<br>
     <input type="radio" name="gender" value="other"> Other<br>
 </br>
  <br>city : <input type= text name="city"required ><br><br>
  state : <input type= text name="state"required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>
