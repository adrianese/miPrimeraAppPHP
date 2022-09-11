<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inicial</title>
    <link rel="stylesheet" href="estilo_u3y4.css">
</head>
<body>
    <header class="header">
       
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

<div class="curso">
    <ul>  
        <h2>  <?php echo $texto; ?>  </h2>
  <li> Duración: <?php echo $unidades_curso ?>   </li>
  <li> Arancel: <?php echo $precio1  ?>   </li>
  <li>  Fecha de Inicio <?php echo $fecha1  ?>   </li>

    </ul>
        <h2> <?php echo $curso2; ?>  </h2>
    <ul>  
  <li> Duración: <?php echo $unidades_curso2 ?>   </li>
  <li> Arancel: <?php echo $precio2  ?>   </li>
  <li>  Fecha de Inicio <?php echo $fecha2  ?>   </li>
    </ul>
<br>
<table class="tabla" border="1px">
<tr >

    <td>Curso Inicial e Intermedio</td>
    <td>Duración -semanas-</td>
    <td>Precio total </td>
    <td>Inicio </td>
</tr>

<tr>
    <td> Totales </td>
    <td><?php echo $uni ;?> </td>
    <td><?php echo $preciot ;?> </td>
    <td><?php  echo $fecha1 ;?> </td>
</tr>

</table>
    </div>

<div class="variables">
<?php

// VARIABLES//

$cadena="5"; //esto es una cadena
$entero=3; //esto es un entero
echo $cadena + $entero ; 
echo $cadena * $entero ; 
echo  ($cadena . $entero);

?>
<?php

//comparacion valor y tipo //

$a = 20;
$b = "20";
if($a === $b) {
echo '$a es igual que $b, y del mismo tipo';
} else {
echo '$a es distinto que $b, o de distinto tipo';
}

?>


</div>

<div>
Parte de HTML normal.
<br><br>
<?php
echo "Parte de PHP<br>";
for($i=0;$i<10;$i++)
{
echo "Linea ".$i."<br>";
}
?>
</div>

    </main>

<footer class="footer">
    <div class="container">

        <h2>&copy 1968 adrianseri@hotmail.com</h2>
    </div>
    
</footer>
    



































</body>
</html>