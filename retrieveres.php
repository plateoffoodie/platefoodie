<?php
session_start();
include "connection.php";

header('Content-type: application/json');

$curLoc=$_POST['curLoc'];
$address = str_replace(" ", "+", $curLoc);
$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&key=AIzaSyAIPHj406dTltNaNJ_F2nVC24sts6vQVKY");
$json = json_decode($json);
$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

$sql = "SELECT res.resName AS resName, res.resAddress AS resAddress FROM seatlistrestaurant slr, restaurant res, seats s 
		WHERE slr.seatid= s.seatId AND slr.restaurantId=res.resId AND slr.statusId='2' AND ABS($long - res.resLong) <= 0.02  
		AND ABS($lat - res.resLat) <= 0.04 ORDER BY res.resId ";
$result = $conn->query($sql);


$rows = array();
if ($result->num_rows > 0) {
	while($rowDB = $result->fetch_assoc()){
		$row['resName'] = $rowDB['resName'];
		$row['resAddress'] = $rowDB['resAddress'];

		array_push($rows,$row);
	}
	echo json_encode($rows);
}else{
	echo 'No Restaurant Near You!';
}



	

?>