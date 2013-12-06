<?php

	$reject = $_GET['id'];
	mysql_connect ('localhost','root');
	mysql_select_db("message");

	$query = "UPDATE mess SET is_approved='N' WHERE id='$reject'";
	$result = mysql_query($query);

	header('location:viewMessage.php');

?>