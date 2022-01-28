<?php
	session_start();
	if ($_SESSION['stat'] != 'masuk') {
		echo "<script type ='text/JavaScript'>alert('Anda belum login!')</script>";
		header("location:login.php?id=out");
	}
