<?php
$servername='localhost';
$username='root';
$password='';
$dbname='project';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
	die ('connection failed');
echo 'connection successful'.'<br>';
?>
