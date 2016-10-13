<?php
session_start();
include "connection.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
		/*google Map API start*/
		$address = str_replace(" ", "+", $row["address"]);
		$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&key=AIzaSyAIPHj406dTltNaNJ_F2nVC24sts6vQVKY");
		$json = json_decode($json);
		$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
		$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};		
		/*google Map end */
		
		$_SESSION['username'] = $row["username"];
		$_SESSION['password'] = $row["password"];
		$_SESSION['address'] = $row["address"];
		$_SESSION['firstname'] = $row["firstname"];
		$_SESSION['lastname'] = $row["lastname"];
		$_SESSION['addressLat'] = $lat;
		$_SESSION['addressLong'] = $long;
		$_SESSION['login'] = true;
	}
    echo "good " . $lat . " long" . $long;
} else {
    echo 'Username and Password not found ';
}

?>