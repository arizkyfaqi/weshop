<?php

	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "weshop";

	$koneksi = mysqli_connect ($server, $username, $password, $database) or die ("Gagal terhubung dengan database !");

?>