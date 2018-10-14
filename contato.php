<html>
<!-- comentário HTML  -->
<head>
<script language="JavaScript" type="text/javascript" src="Funcoes.js">
        </script>
		<script language="JavaScript" type="text/javascript">
		function validar (){
			erro=0;
			form = document.contato;
			var nome=form.nome.value;
			if(nome.length == 0){
				document.getElementById("errNome").innerHTML = "Nome obrigatório.";
				exibe("errNome","inline");
				erro=1;
			}else{exibe("errNome","none");}
			
			var email = form.email.value;
			if(email.length==0){
				document.getElementById("errEmail").innerHTML = "Email obrigatório.";
				exibe("errEmail","inline");
				erro=1;
			}else{
				if(!validaEmail(email)){
					document.getElementById("errEmail").innerHTML = "Email inválido.";
					exibe("errEmail","inline");
					erro=1;}
				else{
					exibe("errEmail","none");}}
			
			if(erro){return false;}else{return true;}
		}
		function limpar(){
			exibe("errNome","none");
			exibe("errEmail","none");
		}
		</script>
<title>....:::: Mauro Furigo Neto - Contato ::::....</title>
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
    <p class="centro">Formul&aacute;rio de Contato</p>
    <form name="contato" action="frm_contato.php" method="POST" onSubmit="return validar()">
        <div class="label">Nome: <span class="ast">*</span>  <input type="text" name="nome" id="nome">  <div class="erro" id="errNome"></div></div>
        <div class="label">Email: <span class="ast">*</span>  <input type="text" name="email" id="email">  <div class="erro" id="errEmail"></div></div>
        <div class="label">Mensagem: <br><textarea type="text" name="mensagem" id="mensagem"></textarea></div>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar" onClick="limpar()">
    </form>
    </div>
    <div id="iniciar">
	    <?php include("baixo.php");?>
    </div>
</div>
</body>
</html>
