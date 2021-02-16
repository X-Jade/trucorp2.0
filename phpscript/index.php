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
	while($row = $result->fetch_assoc()){
		echo "ID : " . $row["ID"];
		echo "<br>";
		echo "Name : " . $row["Nama"];
		echo "<br>";
		echo "Kantor : " . $row["Kantor"];
		echo "<br>";
	}
}else{
	echo "no data";
}
$conn->close();


?>
