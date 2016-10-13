<?php
include "connection.php";

date_default_timezone_set('Asia/Singapore');


$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$contactNumber=$_POST['contactNumber'];
$bday=$_POST['bday'];

if((substr(abs(date('Ymd')) ,0 ,4 ) - substr(abs($bday),0,4) ) < 10)
	$age= substr(abs(date('Ymd') - $bday),0,1);
else
$age= substr(abs(date('Ymd') - $bday),0,2);

$sql = "SELECT username FROM users WHERE username='$username'";
$result = $conn->query($sql);
//echo $result;
if ($result->num_rows > 0) {
    echo 'Existing username in the database. Try another. :)';
} else {
    $insertsql = "INSERT INTO users (username, password, firstname, lastname, age, contactnumber, address) 
	VALUES ('$username', '$password', '$firstname', '$lastname', '$age' , '$contactNumber' , '$address')";
	if ($conn->query($insertsql) === TRUE) {
		echo '1';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>