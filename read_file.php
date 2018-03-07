<?php
	if(isset($_POST['submit'])){

		//SQL CONNECTION
		$url = 'localhost';
		$db_user = 'root';
		$db_pass = 'boazcstrike';
		$db = 'test';
		$conn = mysqli_connect($url, $db_user, $db_pass, $db);


		if(!$conn){
			echo "<center>Connection not established, please check your code.<br>";
			echo "<br>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    	echo "<br>Debugging error: " . mysqli_connect_error() . PHP_EOL;
		 }else{
		// 	echo "Connected to " . $url . " " . $db_user . " " . $db . " " ;
		 	mysqli_query($conn, "USE $db;");

		}

		echo file_get_contents($_FILES['uploadedfile']['tmp_name']); 

	}

?>