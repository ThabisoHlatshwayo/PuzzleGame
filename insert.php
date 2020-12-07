<?php

include_once 'connection.php';

    //$playersName = $_POST['playerName'];
	//$playerScore = $_POST['playerScore'];

	$playersName = 'Obakeng';
	$playerScore = 101;
    
	$sql = "INSERT INTO players (playerName, playerScore) 
    VALUES ('$playerName','$playerScore')";
    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);

?>