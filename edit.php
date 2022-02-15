<?php
$con=mysqli_connect("localhost","root","","task_data");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM t_data");

echo "<table border='1'>
<tr>
<th>name</th>
<th>email</th>
<th>brithday</th>
<th>gender</th>
<th>city</th>
<th>state</th>
<th>edit</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['day'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<form action='update.php' method='post'>";
echo "<td>"."<input type='submit' name='submit' value='Edit'>"."</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
