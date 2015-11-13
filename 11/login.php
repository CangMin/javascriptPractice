<?php

$password="CangMin";
$username="CangMin";

$user=isset($_GET['username'])? $_GET['username']:$_POST['username'];
$pass=isset($_GET['userPwd'])? $_GET['userPwd']:$_POST['userPwd'];

if($user==$username && $pass==$password){
	echo 'pass';
}else{
	echo 'fail';
}



?>