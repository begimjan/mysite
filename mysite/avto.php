<?php 
	$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$insert = mysqli_query($connect,"INSERT INTO ms_users (name,psw,email) VALUES ('" . $_POST['name'] . "','" . $_POST['psw'] . "','" . $_POST['email'] . "')");
  header('Location: http://begimjan/mysite/vhod.php');
 ?>

