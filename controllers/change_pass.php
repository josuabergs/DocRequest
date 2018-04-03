<?php
	session_start();
	$id = $_SESSION["id"];
	$current_pass = $_POST["current_pass"];
	$new_pass_retype = $_POST["new_pass_retype"];

	if($current_pass != $_SESSION["password"]) {
		echo 0; //unsuccessful
	} else {
		$con = new mysqli("localhost", "root", "", "doc_request");
		$sql = "UPDATE `users` SET `password` = '$new_pass_retype' WHERE `id` = '$id'";
		$con->query($sql);
		$_SESSION["password"] = $new_pass_retype;
		echo 1; //success
	}
?>