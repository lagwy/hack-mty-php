<?php
class MySql
{
	private $con;
	function start_connection()
	{
		
		$host = "db644900389.db.1and1.com";
	    $username = "dbo644900389"; //Mysql username
	    $password = "hackmty2016"; // Mysql password
	    $db_name = "db644900389"; // Database name
	    $conn = new mysqli("$host", "$username", "$password", "$db_name");
		
	    /*
		$host = "mysqldb3.ehost-services.com";
		$username = "corne_sgdmx"; //Mysql username
		$password = "1q2w3e4r5t*"; // Mysql password
		$db_name = "corner_sgdtest"; // Database name
	    $conn = new mysqli("$host", "$username", "$password", "$db_name");
	    */

		//Google
		/*
		$host = "104.197.152.74";
		$username = "root"; //Mysql username
		$password = "sgdmexico2016"; // Mysql password
		$db_name = "SGDMexico"; // Database name
		$conn = new mysqli("$host", "$username", "$password", "$db_name",null,'/cloudsql/sgdmexico-1275:us-central1:sgdmexicodatabase');
		*/

	    if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}

	function close_connection($conn)
	{
		$conn -> close();
	}
}

?>