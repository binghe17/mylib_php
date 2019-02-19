<?php
	session_start();

	print_r($_SESSION);

	echo session_id()."<br>";
	echo $_COOKIE[session_name()];


