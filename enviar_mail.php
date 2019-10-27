<?php

$cliente_form=$_POST['name'];
$apellido_form=$_POST['last_name'];
$edad_form=$_POST['age'];
$mail_form=$_POST['email'];
$motiv_form=$_POST['motivo'];
$otraconsul_form=$_POST['otraconsulta'];
$mensaje_form=$_POST['mensaje'];

$cuerpo_mail="Nombre: ".$cliente_form."\r\n".
            "Apellido: ".$apellido_form."\r\n".
            "Correo: ".$mail_form."\r\n".
            "Edad: ".$edad_form."\r\n".
            "Motivo: ".$motiv_form."\r\n".
            "Especifico: ".$otraconsul_form."\r\n".
            "Mensaje aparte: ".$mensaje_form;

$respuesta="From: $cliente_form $apellido_form <$mail_form>";

mail("dometude@gmail.com", "Mensaje Enviado desde www.misitio.com", $cuerpo_mail, $respuesta);

mail($mail_form, "Su Consulta fue recibida", "no responder a este mail" );

$datos_conexion=mysqli_connect("localhost", "root", "", "consultas") or die("error de conexion");

mysqli_query($datos_conexion, "INSERT INTO consultas_clientes VALUES (DEFAULT, '$cliente_form','$apellido_form','$edad_form','$mail_form','$motiv_form','$otraconsul_form','$mensaje_form')");

//header("location: contacto.php?e=ok#contenedor");
?>