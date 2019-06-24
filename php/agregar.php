<?php

	$tpderecho = $_REQUEST["tpderecho"];
	$tjuris = $_REQUEST["tjuris"];
	$njuris = $_REQUEST["njuris"];
	$fjuris = $_REQUEST["fjuris"];
	$cjuris = $_REQUEST["cjuris"];

echo $tpderecho;
echo $tjuris;

	mysql_connect("localhost","root") or die("Problemas con la conexion");

	mysql_select_db("jurydoc") or die("Problemas con la base de datos");

	mysql_query("insert into juris(tipoderecho, temajuris, sentenciajuris, fechajuris, contenidojuris) values('$tpderecho', '$tjuris', '$njuris', '$fjuris', '$cjuris')") or die("Problema en el selector");

	header("Location: http://localhost/imagen.html");
?>
