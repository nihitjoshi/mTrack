<?php
$servername = "localhost";
$username = "id857328_id857328_nihit";
$password = "nihit";
$database = "id857328_kmt";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

//$busid=$_POST["route_id"];
$busid=4;	

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