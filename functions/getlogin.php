<?php

	$boton=$_POST["boton"];
	$user=$_POST["user"];
	$password=$_POST["password"];

	mysql_connect("localhost", "root", "laboratorio");
	mysql_select_db(abc);

	if ($boton == "i") {
		$query="select usuario, contrasena from usuario where usuario='".$user."' and contrasena='".$password."' ";
	} elseif ($boton == "r") {
		$nino=$_POST["nino"];
		$fecha=$_POST["date"];
		$query="insert into usuario(usuario, contrasena, nombre, fecha_nacimiento) values('".$user."', '".$password."', '".$nino."', '".$fecha."')";
	}

	if ($boton == "i") {
		$rs= mysql_query($query);
		$row=mysql_fetch_object($rs);
		$nr = mysql_num_rows($rs);

		if($nr == 0){
			header('Location: ../index.html');
		} else if($nr == 1) {
     		header('Location: ../view/welcome.html');
		}
	} elseif ($boton == "r") {
		mysql_query($query);
		header('Location: ../view/test.html');
	}
