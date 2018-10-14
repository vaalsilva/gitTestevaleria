<?php require("conexao.php");?>
<html>
<head>
<title>....:::: Mauro Furigo Neto - Cadastro::::....</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body  onLoad="obterHora();">
<div id="geral">
    <div id="topo">
	    <?php include("topo.php");?>
    </div>
    <div id="menu">
    	<?php include("menu.php");?>	
    </div>
    <div id="principal">
    	<?php 
			$nome = $_POST["nome"];
			$ddd = $_POST["ddd"];
			$telefone = $_POST["telefone"];
			$email = $_POST["email"];
			$cidade = $_POST["cidade"];
			$estado = $_POST["estado"];
			$sexo = $_POST["sexo"];
			$informativo=$_POST["informativo"];
			$sql= "INSERT INTO cadastro(
				nome, 
				ddd, 
				telefone, 
				email, 
				cidade, 
				estado, 
				sexo, 
				informativo) VALUES(
				'$nome', 
				$ddd,
				$telefone,
				'$email',
				'$cidade',
				'$estado',
				'$sexo',
				'$informativo'
				)";
			//echo $sql;
			
			$res = $con->query($sql);
			if($res==FALSE)
				echo($con->error);
			else
				echo("Cadastro inclu&iacute;do com sucesso!");
		?>
    </div>
    <div id="iniciar">
	    <?php include("baixo.php");?>
    </div>
</div>
</body>
</html>