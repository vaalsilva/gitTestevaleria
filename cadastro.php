<html>
	<!-- coment�rio HTML  -->
	<head>
    	<script language="JavaScript" type="text/javascript" src="Funcoes.js">
        </script>
		<script language="JavaScript" type="text/javascript">
		function validar (){
			erro=0;
			
			var nome=document.cadastro.nome.value;
			if(nome.length == 0){
				document.getElementById("errNome").innerHTML = "Nome obrigat�rio.";
				exibe("errNome","inline");
				erro=1;
			}else{exibe("errNome","none");}
			
			var ddd = document.cadastro.ddd.value;
			if(ddd.length!=2||isNaN(ddd)){
				document.getElementById("errDdd").innerHTML = "DDD inv�lido.";
				exibe("errDdd","inline");
				erro=1;
			}else{exibe("errDdd","none");}
			
			var telefone = document.cadastro.telefone.value;
			if(!telefone.length == 9||isNaN(telefone)){ 
				document.getElementById("errTelefone").innerHTML = "Telefone inv�lido.";
				exibe("errTelefone","inline");
				erro=1;
			}else{exibe("errTelefone","none");}
			
			var email = document.cadastro.email.value;
			if(email.length==0){
				document.getElementById("errEmail").innerHTML = "Email obrigat�rio.";
				exibe("errEmail","inline");
				erro=1;
			}else{
				if(!validaEmail(email)){
					document.getElementById("errEmail").innerHTML = "Email inv�lido.";
					exibe("errEmail","inline");
					erro=1;}
				else{
					exibe("errEmail","none");}}

			var cidade = document.cadastro.cidade.value;
			if(cidade.length==0){
				document.getElementById("errCidade").innerHTML = "Cidade obrigat�rio.";
				exibe("errCidade","inline");
				erro=1;;
			}else{exibe("errCidade","none");}
			
			var estado = document.cadastro.estado.value;
			if(estado==""){
				document.getElementById("errEstado").innerHTML = "Estado obrigat�rio.";
				exibe("errEstado","inline");
				erro=1;;
			}else{exibe("errEstado","none");}
			
			if(!(document.cadastro.sexo[0].checked)&&
			   !(document.cadastro.sexo[1].checked)){
				document.getElementById("errSexo").innerHTML = "Sexo obrigat�rio.";
				exibe("errSexo","inline");
				erro=1;
			}else{exibe("errSexo","none");}
			
			if(erro){return false;}else{return true;}
		}
		function limpar(){
			exibe("errNome","none");
			exibe("errDdd","none");
			exibe("errTelefone","none");
			exibe("errEmail","none");
			exibe("errCidade","none");
			exibe("errEstado","none");
			exibe("errSexo","none");
		}
		</script>
		<title>....:::: Mauro Furigo Neto - Cadastro ::::....</title>
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
    	<p class="centro">Formul&aacute;rio de cadastro</p>
		<form align="center" name="cadastro" action="frm_cadastro.php" method="POST" onSubmit="return validar()">
		<div class="label">Nome: <span class="ast">*</span>  <input type="text" name="nome" id="nome">  <div id="errNome" class="erro escondido"></div></div>
		<div class="label">Telefone: <span class="ast">*</span>  (<input type="text" value="11" name="ddd" id="ddd" size="2" maxlength="2">)
		<input type="text" name="telefone" id="telefone" maxlength="8">  <div id="errDdd" class="erro escondido"></div>  <div id="errTelefone" class="erro escondido"></div></div>
		<div class="label">Email: <span class="ast">*</span>  <input type="text" name="email" id="email">  <div id="errEmail" class="erro escondido"></div></div>
		<div class="label">Cidade: <span class="ast">*</span>  <input type="text" value="" name="cidade" id="cidade">  <div id="errCidade" class="erro escondido"></div></div>
		<div class="label">Estado: <span class="ast">*</span>
		<select name="estado" id="estado">
            <option selected="" value="">Selecione o Estado...</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amap�</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Cear�</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Esp�rito Santo</option>
            <option value="GO">Goi�s</option>
            <option value="MA">Maranh�o</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Par�</option>
            <option value="PB">Para�ba</option>
            <option value="PR">Paran�</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piau�</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RO">Rond�nia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">S�o Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            </select>
		  <div id="errEstado" class="erro escondido"></div></div>
		<div class="label">Sexo: <span class="ast">*</span>  <input type="radio" name="sexo" value="M">M
		<input type="radio" name="sexo" value="F">F  <div id="errSexo" class="erro escondido"></div></div>
		<div class="label"><input type="checkbox" name="informativo" value="S" id="informativo">Desejo receber informativos.</div>
		<input type="submit" value="Cadastrar">
		<input type="reset" value="Limpar" onClick="limpar()">
		</form>
        </div>
        <div id="iniciar">
	        <?php include("baixo.php");?>
        </div>
	</div>
	</body>
</html>
