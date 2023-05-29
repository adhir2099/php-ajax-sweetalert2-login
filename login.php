<?php
	session_start();
	include('./dbcon.php');

	if(isset($_POST['do_login'])){

		$statement = $connect->prepare("SELECT * FROM users WHERE email = ?"); 
		$statement->execute([$_POST['email']]);
		$result = $statement->fetchAll();
		
		if (sizeof($result) > 0 && $_POST["pass"] === $result[0]["pass"]) {
			$_SESSION['email'] = $_POST["email"];
			echo "success";
		}else{
			echo "fail";
		}
	}
?>