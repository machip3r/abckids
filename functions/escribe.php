<?php

	$id=$_GET["id"];
	$punt=$_POST["punt"];
	$wordArray=array("Aro", "Amigo", "Arbol", "Armadillo", "Anillo", "Bota", "Burro", "Baño", "Baston", "Becerro", "Caballo", "Casa", "Cuna", "Carro", "Cama", "Dedo", "Dado", "Dinosaurio", "Dragon", "Delfin", "Elefante", "Enano", "Estatua", "Ecologico", "Estudiante", "Foca", "Final", "Ficha", "Fiesta", "Fosforo", "Gestor", "Geometria", "Gramo", "Gitano", "Ganga", "Helice", "Helicoptero", "Helio", "Higo", "Hecho", "Iglesia", "Institucion", "Invitacion", "Invernadero", "Isla", "Jaula", "Jamaica", "Jarron", "Juntar", "Jinete", "Koala", "Kiosco", "Karma", "Keroseno", "Kiko", "Ladrar", "Ladron", "Lagarto", "Lila", "Largo", "Mano", "Malo", "Manso", "Marron", "Millon", "Naranja", "Negro", "Ninguno", "Nube", "Nariz", "Ñuzco", "Ñu", "Ñudoso", "Ñacunda", "Ñanduti ", "Obrero", "Orfebreria", "Oso", "Oscuro", "Octavo", "Purpura", "Pera", "Piso", "Pantalla", "Pulso", "Querer", "Quemar", "Quedar", "Queso", "Raton", "Rosa", "Rama", "Rito", "Rodar", "Salmon", "Saltar", "Salir", "Silbar", "Sol ", "Tirar", "Tratar", "Timar", "Tocar", "Tomar", "Uña", "Unir", "Unico", "Velar", "Vela", "Volver", "Ver", "Vigilar", "Washington", "Watts", "Whisky", "Walkman", "Xoconostle", "Xilografia", "Xilofono", "Yodo", "Yoyo", "Yegua", "Zanco", "Zapatilla", "Zorro", "Zarpar");

	if (punt==true) {
		$word=$wordArray[array_rand($wordArray)];
	}
	if ($id==1) {
		$word="Araña";
	} elseif ($id==2) {
		$word="Bailar";
	} elseif ($id==3) {
		$word="Correr";
	} elseif ($id==4) {
		$word="Deslizar";
	} elseif ($id==5) {
		$word="Encarcelar";
	} elseif ($id==6) {
		$word="Feo";
	} elseif ($id==7) {
		$word="Gato";
	} elseif ($id==8) {
		$word="Hilo";
	} elseif ($id==9) {
		$word="Italia";
	} elseif ($id==10) {
		$word="Jimena";
	} elseif ($id==11) {
		$word="Kilogramo";
	} elseif ($id==12) {
		$word="Lechuga";
	} elseif ($id==13) {
		$word="Monarca";
	} elseif ($id==14) {
		$word="Nelson";
	} elseif ($id==15) {
		$word="Ñoño";
	} elseif ($id==16) {
		$word="Onza";
	} elseif ($id==17) {
		$word="Panal";
	} elseif ($id==18) {
		$word="Quemadura";
	} elseif ($id==19) {
		$word="Reir";
	} elseif ($id==20) {
		$word="Soltar";
	} elseif ($id==21) {
		$word="Tortuga";
	} elseif ($id==22) {
		$word="Uva";
	} elseif ($id==23) {
		$word="Vender";
	} elseif ($id==24) {
		$word="Waffle";
	} elseif ($id==25) {
		$word="Xochimilco";
	} elseif ($id==26) {
		$word="Yarda";
	} elseif ($id==27) {
		$word="Zapato";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/cosmo.css">
	<title>Escribe la palabra</title>
</head>
<body>
	<center>
		<div id="general-container">
			<div id="word-container" style="margin-top:20px;">
				<form action="score.php" method="POST">
				<br>
				<h1>Escribe la palabra</h1>
				<input type="hidden" name="word" value="<?php echo $word; ?>">
				<?php
					echo "<img src='../assets/img/".$word.".jpg' width='160px' height='160px'>";
				?>
				<h2><?php echo $word; ?></h2>
				<br>
				<input type="text" placeholder="Palabra" name="palabra" id="wordinput" autocomplete="off" autofocus required>
				<br>
				<br>
				<div class="alert alert-dismissible alert-warning" id="nota">
  					<h4 class="alert-heading">Atención</h4>
  					<p class="mb-0">Debes poner la palabra tal cual aparece, con acentos y mayúsculas.</p>
				</div>
				<button type="submit" id="listo" class="btn btn-success">¡Listo!</button>
				<br>
				<br>
				<a href="../view/abc.html"><button type="button" id="volvere" class="btn btn-info">Volver a elegir una letra</button></a>
				<br>
				<br>
				</form>
			</div>
		</div>
	</center>
</body>
</html>