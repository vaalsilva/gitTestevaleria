<html>
	<!-- comentário HTML  -->
	<head>
		<title>....:::: Mauro Furigo Neto - Contato::::....</title>
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
                $email = $_POST["email"];
                $mensagem = $_POST["mensagem"];
				$assunto = "Contato do Site";
				$destinatario = "mauro_furigo@hotmail.com";
				$cabecalho = "From: $email";
				if(mail($destinatario,$assunto,$mensagem,$cabecalho)){
					echo("Mensagem enviada com sucesso!");}
				else{
					echo("Erro no envio da mensagem. Tente novamente mais tarde.");}
            ?>    
        </div>       
        <div id="iniciar">
            <?php include("baixo.php");?>
        </div>
	</div>
</body>
</html>
