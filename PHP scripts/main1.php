<?php

$servername = "localhost";
$username = "id857328_id857328_nihit";
$password = "nihit";
$database = "id857328_kmt";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

$src= $_POST["src"];	
$dst= $_POST["dst"];
$tm= $_POST["tme"];
$tm2= $tm+2;


/*$src="Kadamwadi";
$dst="ITI";
$tm=8;
$tm2=$tm+2;
*/

$qr="select distinct(routeid),busid,btime,source,destination from routemaster natural join busmaster natural join bustimes where path like '%$src%$dst%' and btime between $tm and $tm2";


$res = $conn->query($qr);

$response=array();

if ($res->num_rows > 0) {
	
	
    // output data of each row
    while($row = $res->fetch_assoc()) {
		
		
		$route_id=$row['routeid'];
		$time=$row['btime'];
		$busid=$row['busid'];
		$route_name=$row['source']."-".$row['destination'];
		
		
			
	
		array_push($response,array("id"=>$busid,"time"=>$time,"route_name"=>$route_name));
		
		

	}//while
	
	echo json_encode(array("server_response"=>$response));
}//if 

	$conn->close();
?>