<?php
	$host = 'mysql'; //Nom donné dans le docker-compose.yml
	$user = 'mysql';
	$password = 'mysql';
	$db = 'mysql';

	$conn = new mysqli($host,$user,$password,$db);
	if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
	else{
	        echo "Connexion à MSSQL ok<br />";
	        mysqli_close($conn);
	}	

?>
