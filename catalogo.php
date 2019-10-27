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
    <h2>Catálogo</h2>
        <div id="botonera_catalogo">
    <ul>
        <li><a href="catalogo.php?id=silloncapri#catalogo">Sillón Capri </a></li>
        <li><a href="catalogo.php?id=mesaipanema#catalogo">Mesa Ipanema </a></li>
        <li><a href="catalogo.php?id=bancovenecia#catalogo">Banco Venecia</a></li>
    </ul>
        
        </div>
    <?php
    if(isset($_GET['id'])){

    switch ($_GET['id']) {
        case 'silloncapri':
            $producto='<b>Producto:</b> Sillón Capri';
            $precio='<b>Precio:</b> $345.00';
            $caracteristicas='<b>Caracteristicas:</b> Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
            $imagen='sillon1.jpg';
        break;

        case 'mesaipanema':
            $producto='<b>Producto:</b> Mesa Ipanema';
            $precio='<b>Precio:</b> $500';
            $caracteristicas='<b>Caracteristicas:</b> Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms ';
            $imagen='ipanema.jpg';
        break;

        case 'bancovenecia':
            $producto='<b>Producto:</b> Banco Venecia';
            $precio='<b>Precio:</b> $450';
            $caracteristicas='<b>Caracteristicas:</b> Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
            $imagen='venecia.jpg';
        break;
        }   
    ?>
    <div id="mostrar_descripcion">
        <p><?php echo $producto; ?></p>
        <p><?php echo $precio; ?></p>
        <p><?php echo $caracteristicas; ?></p>
        <img src="imagenes/<?php echo $imagen; ?>">
    
    </div>

    <?php
    }   else {
        echo "<h2>Por favor seleccione un producto de nuestro catalogo listado</h2>";
    }
    ?>

    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>