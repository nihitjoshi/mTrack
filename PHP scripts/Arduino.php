<?php



$db_name="id857328_demo";
$mysql_username="id857328_nihit";
$mysql_password="nihit";
$server_name="localhost";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

$Latitude=$_GET["latitude"];
$Longitude=$_GET["longitude"];
$Bus=$_GET["bus"];

//$sql_query="insert into BusLocation values('$Bus','$Latitude','$Longitude');";
$sql_query="update location set latitude='$Latitude' , longitude='$Longitude' where bus_no='$Bus';";
if(mysqli_query($conn,$sql_query))
{
	echo "Added";
	
}
else{
	echo "not added";
}
?>