<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kmt";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);


$busid=3;	

$qr="select busno,source,destination,path from busmaster natural join routemaster where busid ='$busid'";
$res = $conn->query($qr);
$response=array();

if ($res->num_rows > 0) {
	
	
	
    // output data of each row
    while($row = $res->fetch_assoc()) {
		
		$bus_no=$row['busno'];
		$source=$row['source'];
		$destination=$row['destination'];
		$path=$row['path'];
		
		array_push($response,array("bus_no"=>$bus_no,"source"=>$source,"destination"=>$destination,"path"=>$path));
	}//while 

	echo json_encode(array("server_response"=>$response));

}//if
	$conn->close();

?>
