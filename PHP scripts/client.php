<?php

$db_name="id857328_demo";
$mysql_username="id857328_nihit";
$mysql_password="nihit";
$server_name="localhost";
$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

$bus_No=$_POST["busNum"];
$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];


   //$sql_query1="insert into location values('$bus_No','$latitude','$longitude');";
   $sql_query="update location set latitude='$latitude' , longitude='$longitude' where bus_no='$bus_No';";

    if (mysqli_query($conn,$sql_query)) {
      echo "Added";
    } else {
      echo "not added";
    } 
    
?>