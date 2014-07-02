<?php
	//Header dizendo que é CSS
	header("Content-type: text/css; charset: UTF-8");

	//Diferenciando as Core da aplicação por dominio
	$dominio= $_SERVER['HTTP_HOST'];

	//Quando for localhost faço algo
	if ($dominio == "localhost") {
		$corBackroundTable = "#ECECEC";
		$corBackroundThead = "##BDD7FF";
		$corDasLetras= "#000";
	}else{
	//Quando for produção faço outra coisa
		$corBackroundTable = "#FA858A";
		$corBackroundThead = "##BDD7FF";
		$corDasLetras= "#666";
	}	
?>
*{
	margin: 0;
	padding: 0;
}

html, body{
	width: 100%;
	height: 100%;
}

table{
	margin-left:25%;
	width: 50%;
	-webkit-box-shadow: 0 1px 2px #888;
	box-shadow: 0 1px 2px #888;
	border-radius: .3em;
	background: <?php echo $corBackroundTable?>;
	color: <?php echo $corDasLetras?>;
}

thead{
	background: <?php echo $corBackroundThead?>;
}