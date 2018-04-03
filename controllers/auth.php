<?php
	session_start();
	header('Content-type: application/json');
	$username = $_POST["username"];
	$password = $_POST["password"];
	$con = new mysqli("192.168.1.18", "root", "", "doc_request");
	$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
	$result = $con->query($sql);
	$data;
	if($row = $result->fetch_assoc()) {
		$data["status"] = 1;
		$data["id"] = $row["id"];
		$data["privilege"] = $row["privilege"];
		$_SESSION["privilege"] = $row["privilege"];
		$_SESSION["id"] = $row["id"];
		$_SESSION["name"] = $row["name"];
		$_SESSION["number"] = $row["number"];
		$_SESSION["password"] = $row["password"];
	} else {
		$data["status"] = 0;
	}
	echo json_encode($data);
?>