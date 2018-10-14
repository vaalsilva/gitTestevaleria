<?php require("autentica.php");?>
<?php require("conexao.php");?>
<html>
	<head>
		<script language="JavaScript" type="text/javascript" src="Funcoes.js"></script>
        <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
		<script> 
			function pesquisa(valor) { 
					if(valor.length > 0){
						exibe("pagina","block");
						//FUNÇÃO QUE MONTA A URL E CHAMA A FUNÇÃO AJAX
						url="busca_nome.php?valor="+valor;
						ajax(url);
					}else{exibe("pagina","none");}
			} 
        </script>
		<title>....:::: Mauro Furigo Neto - Restrito ::::....</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body  onLoad="obterHora(); exibe('pagina','none');">
	<div id="geral">
	<div id="topo">
		<?php include("topo.php");?>
	</div>
	<div id="menu">
		<?php include("menu.php");?>	
	</div>
		<div id="principal">
			<span class="label">&Aacute;rea Restrita :: <a href="logout.php">Sair</a></span>
            <p>
            <div id="loading" class="escondido"></div>
            <div class="label">Buscar: <input type="text" size="20" name="nome" onKeyUp="pesquisa(this.value);" onKeyDown="pesquisa(this.value);">  <input type="button" value="Pesquisar">
			<div id="pagina" class="ajax"></div></div>
            </p>
            <table border="0" cellpadding="2" cellspacing="0">
                <tr class="cabecalho">
                    <th>Nome</th>
                    <th>DDD</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Sexo</th>
                </tr>
                <?php
					$sql="SELECT * FROM cadastro";
					$res = $con -> query($sql);
					$linha=0;
					$cor="";
					while($row = $res -> fetch_assoc()){
						if(($linha%2)==0){$cor="linhapar";}
						else{$cor="linhaimpar";}
						
						echo "<tr class=$cor>";
							echo "<td>".$row["nome"]."</td>";
							echo "<td>".$row["ddd"]."</td>";
							echo "<td>".$row["telefone"]."</td>";
							echo "<td>".$row["email"]."</td>";
							echo "<td>".$row["cidade"]."</td>";
							echo "<td>".$row["estado"]."</td>";
							echo "<td>".$row["sexo"]."</td>";
						echo "</tr>";
						$linha++;
					}
				?>
            </table>
		</div>
        <div id="iniciar">
            <?php include("baixo.php");?>
        </div>
    </div>
	</body>
</html>
