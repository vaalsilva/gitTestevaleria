<html>
<!-- comentário HTML  -->
    <head>
	    <title>....:::: Mauro Furigo Neto - Fotos ::::....</title>
    	<link rel="stylesheet" type="text/css" href="estilo.css">
        <script language="JavaScript" type="text/javascript" src="Funcoes.js"></script>
    </head>
    <body onLoad="obterHora();">
        <div id="geral">
            <div id="topo">
	            <?php include("topo.php");?>
            </div>
            <div id="menu">
    	        <?php include("menu.php");?>
            </div>
            <div id="principal">
            <p class="centro">Fotos</p>
            <?php
			for($i=1;$i<8;$i++){
                echo("<a href=\"imagens/Fotos/Foto ($i).jpg\" target=\"_blank\"><img border=\"0\" src=\"imagens/Fotos/Foto ($i).jpg\" width=\"100\" height=\"75\"></a>");}
			?>
            </div>
            <div id="iniciar">
				<?php include("baixo.php");?>
			</div>
        </div>
    </body>
</html>
