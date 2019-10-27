<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="#">Noticias</a></li><li><a href="#">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">

    <h2>Contáctenos</h2>

<form class="mistablas" method="POST" action="enviar_mail.php">
	<div class="form-group">
		<label>Nombre</label>
		<input type="text" name="name" placeholder="Ingresa tu primer nombre" maxlength="30" required>
	</div>
			<br>
	<div class="form-group">
		<label>Apellido</label>
		<input type="text" name="last_name" placeholder="Ingrese su Apellido" maxlength="30" required>
	</div>
            <br>
    <div class="form-group">
		<label>Edad:</label>
		<input type="number" name="age" value="30">
    </div>
            <br>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="por favor introducir un mail valido de contacto" maxlength="50" required>
	</div>
			<br>
	<div class="form-group">
		<label>Motivo de Su consulta</label>
			<select name="motivo">
				<option value="problema">Problemas con la pagina</option>
				<option value="solicitud">Solicito datos</option>
				<option value="otro">Otro</option>
			</select>
            <br>
            <br>
	<div class="form-group">
		<label>especifique el motivo de su consulta</label>
		<input type="text" name="otraconsulta" required>	
	</div>
            <br>
    <textarea name="mensaje" cols="100" rows="10" placeholder="Ingrese Su mensaje"></textarea>
            <br>
    <input type="submit" value="Enviar Consulta">
</form>

<?php
if(isset($_GET['e'])) {
if($_GET['e']=='ok') {
    echo "<h1>Su consulta Fue enviada con exito</h1>
    <br>
    <p>un miembro del equipo se comunicara con ud a la brevedad</p>";
}}
?> 

<?php
error_reporting(0);
?>

</section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>