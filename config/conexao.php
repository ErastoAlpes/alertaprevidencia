<?php
	
	$banco = 'alertaprevidencia';
	$user = '';
	$pass = '';
	$server = 'localhost';
	
	$conecta = mysql_connect($server, $user, $pass);
	$db = mysql_select_db($banco, $conecta);
	
	if(!$conecta){
		die("Erro na conexao com o banco de dados." .mysql_error);
	}
	echo "Conectado com sucesso!";
	
	
?>