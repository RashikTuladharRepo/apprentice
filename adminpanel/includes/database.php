<?php
@session_start();
$config=array(
	'hostname'=>'localhost',
	'username'=>'root',
	'password'=>'',
	'database'=>'theapprentice'
	);

$con=new mysqli(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
	);

if(mysqli_connect_errno())
{
	echo "error:could not connect to database";
}