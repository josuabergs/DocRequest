<?php
	if($_POST["username"] == 'admin' && $_POST["password"] == 'abc123') {
		echo 1; //admin page
	} else {
		echo 2; //student page
	}
?>