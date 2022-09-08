<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	session_destroy();
	header("location: https://hairexe.000webhostapp.com/index.php");
?>