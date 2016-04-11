<?php

//	Login gegevens die kunnen worden opgevraagd
	define('DB_HOST', '10.3.1.187');
    define('DB_USER', 'thijsaz163_test');
    define('DB_PASSWORD', 'Test01!!');
    define('DB_DATABASE', 'thijsaz163_test');

//	define('DB_HOST', 'localhost');
//    define('DB_USER', 'root');
//    define('DB_PASSWORD', '');
//    define('DB_DATABASE', 'app');


    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) 
or die ("Verbinding mislukt: Geen geldige host, gebruikersnaam, database of wachtwoord"); 

	// Maakt het nieuwe bericht daadwerkelijk aan.	
	$qry = "LOAD DATA LOCAL INFILE 'http://floriade.php/includes/data.csv' REPLACE INTO TABLE `excel` FIELDS TERMINATED BY ';' ENCLOSED BY '\"' ESCAPED BY '\\\\' LINES TERMINATED BY '\r\n'";
	$result = mysqli_query($conn, $qry);
	
	// Kijkt of alles gelukt is.
	if($result) {
		header("location: http://www.google.com");
		exit();
	}else {
		die("Query failed");
	}

	mysqli_close($conn);

?>


LOAD DATA LOCAL INFILE '/var/www/tmp/phpLYmjXG' REPLACE INTO TABLE `excel` FIELDS TERMINATED BY ';' ENCLOSED BY '\"' ESCAPED BY '\\' LINES TERMINATED BY '\r\n'
