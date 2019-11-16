<?php

	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
	echo "<meta name='viewport' content='user-scalable=no,width=device-width,initial-scale=1'>";
	echo "<meta charset='utf-8'>";
	echo "<link rel='stylesheet' type='text/css' href='../assets/css/estilos.css'>";
	echo "<link rel='stylesheet' type='text/css' href='../assets/css/cosmo.css'>";
	echo "<title>Puntuación</title>";
	echo "</head>";
	echo "<body>";
	echo "<center>";
	echo "<div id='general-container'>";
	echo "<div id='container-score'>";

	$word=$_POST["word"];
	$palabra_e=$_POST["palabra"];

	if($word==$palabra_e){
		echo "<form action='escribe.php' method='POST'>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<h1>Excelente</h1>";
		echo "<h3>Sigue así, estás aprendiendo</h3>";
		echo "<br>";
		echo "<button type='submit' class='btn btn-success' id='next-word' name='punt' value='true'>Siguiente palabra</button>";
		echo "</form>";
		echo "<br>";
		echo "<form action='../view/exit.html' method='POST'>";
		echo "<button type='submit' id='exit' class='btn btn-danger' onclick='javascript:window.open('../view/exit.html', '_self', '');'>Salir</button>";
		echo "</form>";
		echo "<br>";
		echo "<br>";
	} else {
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<h1 style='color:red;'><b>Te equivocaste, vuelve a intentarlo</b></h1>";
		echo "<br>";
		echo "<a href='javascript:window.history.back();'><button type='button' id='retry' class='btn btn-warning'>Volver a intentarlo</button></a>";
		echo "<br>";
		echo "<br>";
		echo "<form action='../view/exit.html' method='POST'>";
		echo "<button type='submit' id='exit-retry' class='btn btn-danger' onclick='javascript:window.open('../view/exit.html', '_self', '');'>Salir</button>";
		echo "</form>";
		echo "<br>";
	}

	echo "</div>";
	echo "</div>";
	echo "</center>";
	echo "</body>";
	echo "</html>";