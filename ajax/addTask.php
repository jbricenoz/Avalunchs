<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['task'])){
	$task = $_GET['task'];
	$status = "0";

	$query="INSERT INTO tasks(task,status,created_at,dateregister)  VALUES ('$task', '$status', NOW(), CURDATE())";
	$result = $mysqli->query($query);

	$error = $mysqli->errno;

	switch ($error){
		case 0:
		$errorMessage = "";
		break;

		case 1064:
		$errorMessage = "Experimentamos un problema: " + $error;
		break;

		default:
		$errorMessage = "Ocurrio un error deconocido: " + $error;
		break;
	}

	mysqli_close($mysqli);

	echo json_encode(array('error' => $error, 'errorMessage'=> $errorMessage ));
}
?>