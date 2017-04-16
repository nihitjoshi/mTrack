<?php

$db_name="id857328_demo";
$mysql_username="id857328_nihit";
$mysql_password="nihit";
$server_name="localhost";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

$bus_No=$_POST["bus_no"];




$sql = "select * from location where bus_no='$bus_No';";

$result=mysqli_query($conn,$sql);

$response = array();

while($row = mysqli_fetch_array($result))
{
	array_push($response,array("bus_no"=>$row[0],"latitude"=>$row[1],"longitude"=>$row[2]));
	
}
echo json_encode(array("server_response"=>$response));

mysqli_close($conn);

?>