<?php

$db_name="id857328_demo";
$mysql_username="id857328_nihit";
$mysql_password="nihit";
$server_name="localhost";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);


$sql = "select name from stops ;";

$result=mysqli_query($conn,$sql);

$response = array();

while($row = mysqli_fetch_array($result))
{
	array_push($response,array("name"=>$row[0]));
	
}
echo json_encode(array("server_response"=>$response));

mysqli_close($conn);

?>