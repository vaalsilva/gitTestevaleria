<?php 
require_once("conexao.php");
if(!empty($_GET["valor"])){ 
	$sql = "SELECT * FROM cadastro where nome like '$_GET[valor]%'";
	$res = $con->query($sql);
	while($linha=$res->fetch_assoc()){
		echo $linha["nome"]."<br>";
	}
}  
?>
