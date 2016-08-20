<?PHP 
	
	$con = mysqli_connect('localhost','admin','1234','db_tips');


	$sql = "SELECT * FROM tips ORDER BY likes DESC";

	
	if ($resultado = $con->query($sql)) {

	    
	    while ($fila = $resultado->fetch_assoc()) {
	        echo "tip: " . $fila["message"] . " - ";
	    }

	    $resultado->free();
	} else {
		echo " No ";
	}



?>