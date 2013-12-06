<?php
	require_once("config.php");
	
	$del = new MessageDAO($config);
	$del->deleteMessage($_GET['id']);
	echo "<script>alert('Successfully Deleted!!');window.location.href='view_all.php'</script>";
?>