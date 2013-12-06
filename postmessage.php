<?php

	require_once('config.php');
	
	$MessageDAO = new MessageDAO();
	if(isset($_POST)){
	$b = $MessageDAO->createMessage($_POST);
		if($b){
			echo "Entered data successfully!!:)";
		}

		else{
			echo "failed";
		}
}

?>
<br>
<a href="viewMessage.php"><button>View</button>