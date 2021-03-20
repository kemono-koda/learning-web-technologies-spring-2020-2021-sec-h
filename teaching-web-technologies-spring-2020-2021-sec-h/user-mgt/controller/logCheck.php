<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			if($userName == $_POST['userName'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>