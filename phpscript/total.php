<?php
$ip = "172.20.0.2";
$user = "root";
$pass = "1";
$db = "Trucorp";

$conn = new mysqli($ip, $user, $pass, $db);

if($conn->connect_error){
        die("Connection failed");
}

$query = "SELECT * FROM users";
$result = $conn->query($query);

if($result->num_rows>0){
        $row = mysqli_num_rows($result);
	echo "Total users : " . $row;
}else{
        echo "no data";
}
$conn->close();


?>
