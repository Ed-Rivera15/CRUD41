<?php
	session_start();
	include('conn.php');

	$query=$conn->query("select * from cli where userid='".$_SESSION['user']."'");
	$row=$query->fetch_array();

	$user=$row['username'];
?>