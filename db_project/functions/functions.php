<?php

function dbcon($db_obj){
	try{
		// database connection
	  	$conn = new PDO("mysql:host=localhost;dbname=stumped2",'stumped2','Geoff5241');
	}
		catch(PDOException $pe)
	{
	  	die('Connection error, because: ' .$pe->getMessage().'<br>
	  		 Please email the webmaster with the error.<br>
	  		 <a href="mailto:yourapanzy91@gmail.com?Subject=Database%20Error">
			 yourapanzy91@gmail.com</a></body></html>');
	}
}
?>