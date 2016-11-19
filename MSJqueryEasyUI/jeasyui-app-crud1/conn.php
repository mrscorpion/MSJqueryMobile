<?php

//$conn = @mysql_connect('127.0.0.1','root','root');
//if (!$conn) {
//	die('Could not connect: ' . mysql_error());
//}
//mysql_select_db('mydb', $conn);

$conn = @mysqli_connect('Localhost', 'root', 'root');
if(!$conn){
	die('Could not connect: ' . mysqli_error());
}
mysqli_select_db('mydb', $conn);
?>