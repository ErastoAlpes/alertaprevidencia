<meta charset="utf-8">
<?php
	
	$banco = 'alertaprevidencia';
	$user = 'root';
	$pass = '';
	$server = 'localhost';
	
	$conexao = mysql_connect($server, $user, $pass) or die ("Erro na conexao com o banco de dados." .mysql_error);;
	mysql_select_db($banco);
	
	if(!$conexao){
		die("Erro na conexao com o banco de dados." .mysql_error);
	}
	
	$query = "SELECT SUM(qte_beneficios_concedidos) AS qte, ROUND(SUM( Vlr_Benef_Concedidos ), 2) AS val 
      FROM tbprev_beneficios_uf_municipios WHERE unidade_da_federacao = 'Paraíba' 
      AND ano = 2016 AND Clientela = 'Rural'";

	$result = mysql_query($query);
	//echo  'R$' . mysql_result($result, 0);
	echo 'XX-> ' . mysql_num_rows($result);
	if( mysql_num_rows( $result ) )
	{
  		 $dados = mysql_fetch_object( $result );
   		echo 'Existem '.$dados->val.' colaborador(es) com esse nome!';
	}
	else
		echo 'nao exite nada';
	
	
?>