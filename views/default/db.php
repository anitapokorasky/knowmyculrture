<?PHP


	$con = mysqli_connect('localhost','admin','1234','db_tips');

	$sql = "CREATE TABLE tips (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		pais VARCHAR(80) NOT NULL,
		categoria int(3) NOT NULL,
		likes int(6) NOT NULL,
		dislikes int(6) NOT NULL,
		message TEXT
	)";

	if($con->query($sql) == TRUE){
		echo "1";
	}

?>