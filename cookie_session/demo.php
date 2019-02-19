<?php
	session_start();

	$_SESSION["aa"]="111111111";
	$_SESSION["bb"]="22222222222";
	$_SESSION["cc"]=array('1', 2, 4);

	echo session_id()."<br>";
