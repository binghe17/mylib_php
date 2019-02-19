<?php
define('RUNTIME',microtime(1));
$php=<<<php

// function fun1(){
//   echo 'aaaaaa';
// }
// fun1();
echo '<img src="1.gif" />';

php;



$pass_str=base64_encode($php);
//echo $pass_str;
// $pass_str='
// DQpmdW5jdGlvbiBmdW4xKCl7DQogIGVjaG8gJ2FhYWFhYSc7DQp9DQpmdW4xKCk7DQplY2hvICc8aW1nIHNyYz0iMS5naWYiIC8+JzsNCg==
// ';
echo '<br>';
// echo '<br>';
$run_php=base64_decode($pass_str);
// echo $b;

// for ($i=0; $i < 10000 ; $i++) {
//   eval($run_php);
// }
eval($run_php);



$tm=microtime(1)-RUNTIME;
echo 'CPU: '.$tm;
