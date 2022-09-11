<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inicial</title>
    <link rel="stylesheet" href="estiloindex.css">
</head>
<body>
    <header class="header">
        <h1>Curso de PHP y MySQL Inicial</h1>
        <div class="container logoNavContainer">
             <nav class="navigation">

                  <ul>
                 <li><a href="index.php">Inicio</a></li>
                 <li><a href="u3y4.php">Unidad 3 y 4</a></li>
                  <li><a href="tienda.php">Cursos</a></li>
                 <li><a href="inscripcion.php">Inscripcion</a></li>
                 <li><a href="visitas.php">Libro de Visitas</a></li>
                    </ul>

                </nav>

    </div>
    </header>


    <main class="main">

        <div class="container">


<h2>PHP: Uso de delimitadores, variables y constantes.</h2><br>
<div class="divpar">

<?php

            echo("HOLA MUNDO CON PHP");

            echo "<h2>HOLA MUNDO CON PHP</h2>";

?>
<h4>(impresion con echo)</h4>
</div>

<h2>Uso de comentarios en php:</h2>
<div class="divimpar">
<p>
    
# COMENTARIOS <br>
//comentario de una linea 
<br>
/* esto es
<br>
 un comentario
 <br>
  de varias lineas*/</p>
  <br>
</div>

<h2>Definición de Variable</h2>
<div class="divpar">

 //variables definidas con $//<br>

$texto ="Curso de Php Inicial "; ARRAY <br>
    $unidades_curso = 6 ; NUMERICAS <br>
    $precio1 = 15200; <br>
    $fecha1= "21/08/2020"; FECHA <br>

</div>





    <?php

    $texto = "Curso de Php Inicial ";
    $unidades_curso = 6 ;
    $precio1 = 15200;
    $fecha1= "21/08/2020";


    $curso1 = $texto;

    


    $curso2 = "Curso de Php Intermedio ";
    $unidades_curso2 = 8 ;
    $precio2 = 17800;
    $fecha2= "21/12/2020";


    $uni= $unidades_curso + $unidades_curso2 ;
  $preciot= $precio1 + $precio2 ;
  
  ?>
   
   




   <h2>Links de Interés</h2>
<div class="divimpar">

<a href="https://www.w3schools.com/"target=”_blank”>Enlace W3SCHOOLS</a> <br>
<a href="https://www.php.net/"target=”_blank”>PHP NET</a> <br>
<a href="https://htmlcolorcodes.com/es/"target=”_blank”>COLOR CODES</a>
</div>


    </main>

<footer class="footer">
    <div class="container">

        <h2>&copy 1968 adrianseri@hotmail.com</h2>
    </div>
    
</footer>
    



































</body>
</html>