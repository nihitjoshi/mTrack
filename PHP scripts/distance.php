<?php

$db_name="id857328_kmt";
$mysql_username="id857328_id857328_nihit";
$mysql_password="nihit";
$server_name="localhost";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

$source=$_POST["source"];
//$source="Kagal";



$sql = "select latitude,longitude from stops where name='$source';";

$result=mysqli_query($conn,$sql);

$response = array();

while($row = mysqli_fetch_array($result))
{
	array_push($response,array("latitude"=>$row[0],"longitude"=>$row[1]));
	
}
echo json_encode(array("server_response"=>$response));

mysqli_close($conn);

?>