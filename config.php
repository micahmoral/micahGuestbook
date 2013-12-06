<?php
	/**
	 * Filename: config.php
	 * Message class for the Guestbook
	 */
	require_once("Message.php");
	require_once("MessageDAO.php");

	$config = array('file' => 'localhost', 'username' => 'root', 'password' => '', 'database' => 'message');
	mysql_connect($config['file'], $config['username'], $config['password']);
	mysql_select_db($config['database']);


?>