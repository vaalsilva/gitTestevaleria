<html>
	<head>
		<script language="JavaScript" type="text/javascript" src="Funcoes.js">
        </script>
        <script language="javascript" type="text/javascript">
		function validar(){
			erro=0;
			var usuario = document.restrito.usuario.value;
			if(usuario.length == 0){
				document.getElementById("errUsu").innerHTML = "Usuário obrigatório.";
				exibe("errUsu","inline");
				erro=1;
			}else{exibe("errUsu","none");}
			
			var senha = document.restrito.senha.value;
			if(senha.length == 0){
				document.getElementById("errPas").innerHTML = "Senha obrigatória.";
				exibe("errPas","inline");
				erro=1;
			}else{
				if(isNaN(senha)){
					document.getElementById("errPas").innerHTML = "Digite somente números.";
					exibe("errPas","inline");
					erro=1;
					document.restrito.senha.value="";
				}else{exibe("errPas","none");}
			}
			if(erro){return false;}else{return true;}
			
		}
		</script>
		<title>....:::: Mauro Furigo Neto - Restrito ::::....</title>
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
        <p class="centro">Acesso Restrito</p>
		<form name="restrito" action="frm_restrito.php" method="POST" onSubmit="return validar()" class="centro">
		<div class="label">Usu&aacute;rio:  <span class="ast">*</span>  <input type="text" name="login" id="usuario">  <div id="errUsu" class="erro escondido"></div></div>
		<div class="label">Senha: <span class="ast">*</span>  <input type="password" name="senha" id="senha">  <div id="errPas" class="erro escondido"></div></div>
		<input type="submit" value="Logar">
        </form>
		</div>
        <div id="iniciar">
            <?php include("baixo.php");?>
        </div>
    </div>
	</body>
</html>
