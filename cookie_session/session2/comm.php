<?php
	if(isset($_GET["sid"])){
		session_id($_GET["sid"]);
	}
	session_start();

	if(!$_SESSION["isLogin5"]){
		header("Location:login.php");
	}
