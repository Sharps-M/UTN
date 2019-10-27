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
        	<h1>Programador Web con PHP y MySQL<br/>Ejercicio Unidad 5</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Presentación</h2>
    <p>El curso de Programador Web PHP y MySQL es un curso  pensado para aquellas personas que deseen incluir conocimientos para desempeñarse en el ámbito de diseño o programación, y que deseen  adquirir  nuevos conocimientos basados en los avances de las tecnologías de última generación en lenguajes orientados a realización de sitios web dinámicos.</p>
<p>
Internet ha creado en el mundo un nuevo modo de conectarse, de trabajar y de estudiar. Ha remodelado esquemas de comunicación entre las personas y organizaciones. Conociendo la inmensa potencialidad de la red de redes, los profesionales del área no pueden desconocer la forma de desarrollar aplicaciones en los lenguajes más populares de la web, ya que es esto es esencial para diferenciarse del simple diseño de páginas estáticas.
</p>
<p>
Al finalizar el curso el alumno estará habilitado para realizar aplicaciones básicas para sitios web, utilizando los lenguajes de mayor demanda en el mercado.
   </p> 
    </section>

<div id="unidad_6">

        <!--a partir de aca esta el ejercicio de la unidad 6-->   

    <h2>PlaceHolder Ejercicio Unidad 6</h2>
    
</div>

<div id="botonera_index">
    <ul>
        <li><a href="index.php?id=imagen4#index">Elemento 1</a></li>
        <li><a href="index.php?id=imagen4#index">Elemento 2</a></li>
        <li><a href="index.php?id=imagen4#index">Elemento 3</a></li>
        <li><a href="index.php?id=imagen4#index">Elemento 4</a></li>
    </ul>
        
</div>

<?php
    // Index Imagenes
    $images = array(
        'imagenes\random.jpg',
        'imagenes\random2.jpg',
        'imagenes\random3.jpg',
        'imagenes\random5.jpg',
        'imagenes\random6.jpg',
        'imagenes\random7.jpg',
        'imagenes\random8.jpg',
        'imagenes\_random6.jpg',
        'imagenes\__random.jpg',        
    );

    shuffle($images);
?>

<div class="grid">

<?php
    for ($i=0; $i<4; ++$i) {
    echo '<img src="' . $images[$i]. '" />';
    }; 
?>
 </div>


<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>