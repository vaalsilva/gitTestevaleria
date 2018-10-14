<?php
	require("conexao.php");
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = $senha";
	//echo $sql;
	$res = $con -> query($sql);
	if($con -> affected_rows == 0){
		header("Location: restrito.php");
	}else{
		header("Location: index_restrito.php");
		session_start();
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;}
?>