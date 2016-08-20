<?PHP

	$con = mysqli_connect('localhost','admin','1234','db_tips');
	
	$country = "test";
	$category = "test";
	$likes = "test";
	$dislikes = "test";
	$message = "Hola bla bla bla";

	$sql = "INSERT INTO tips (pais,categoria,likes,dislikes,message) VALUES ('$country','$category','$likes','$dislikes','$message')";

	$con->query($sql);



?>