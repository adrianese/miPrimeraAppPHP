<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inicial</title>
    <link rel="stylesheet" href="estilotienda.css">
</head>

    <header class="header">
       
        <div class="container logoNavContainer">
             <nav class="navigation">

                  <ul>
                 <li><a href="index.php">Inicio</a></li>
                 <li><a href="u3y4.php">Unidad 3 y 4</a></li>
                  <li><a href="tienda.php">Cursos</a></li>
                 <li><a href="inscripcion.php">Inscripcion</a></li>
                 <li><a href="visitas.php"> Visitas</a></li>
                    </ul>

                </nav>

    </div>
    </header>



    <section class="tienda_container">
        <h2> Tienda de Cursos</h2>
        <ul>
        <li> <a href="tienda.php? producto=hc"> Curso de HTML</a>  </li>
        <li> <a href="tienda.php? producto=js"> Curso de JavaScript</a> </li>
        <li> <a href="tienda.php? producto=ph"> Curso de PHP  </a></li>

        </ul>


        
<?php 


$seleccion =NULL ;
$duracion =NULL;
$precio=0;
$coment=NULL;




if (isset($_GET['producto'])) {
        switch ($_GET['producto']){
                case 'hc':
                        $seleccion ="Curso de HTML y CSS";
                        $duracion = "20 clases";
                        $precio = 5000;
                        $coment=" Conoce todo sobre etiquetas HTML, semántica, CSS, como dar estilos
                         a los elementos de tu sitio web. 
                         Aprenderás a construir sitios para internet de manera eficiente.
                        Aplicar estilos usando CSS3
                        Dominar la anatomía de un elemento HTML
                        Crear Sitios Web estáticos con HTML y CSS3 ";
                        $img='./logo/htmlcss.jpg';
                        break;
               case  'js':
                $seleccion ="Curso de Javascript";
                $duracion = "26 clases";
                $precio = 6000;
                $coment="Conocer los conceptos básicos de JS
                Descubrir la historia de JavaScript
                Aprender cómo tomar decisiones y validarlas
                Trabajar con objetos";
                $img='./logo/js.jpg';
        
                break;  

                case  'ph':
                        $seleccion ="Curso de PHP";
                        $duracion = "22 clases";
                        $precio = 5500;
                        $coment="Aprende PHP, el lenguaje de programación para backend presente en el 80% de sitios web.
                        Inicia tu ruta de aprendizaje como PHP Developer y desarrolla tus primeros algoritmos.
                        Configura tu entorno de desarrollo con herramientas como XAMPP";
                        $img='./logo/php.jpg';
                        break;  


        }
}

?>

            <div class="producto_description">
                            <h2>Descripción</h2>
                             <h3><?php echo $seleccion; ?>  </h3>
                              <h3><?php echo $duracion ; ?>  </h3>
                              <h3><?php echo $precio ;?>  </h3>
                             <h3><?php echo $coment ;?>  </h3>

            </div>
                             <div class="image_container">
                                          
                             <img src="<?php echo $img ; ?>" width="200" alt="logo">
                                        
                            
                            </div>          


           
 </section>


<footer class="footer">
    <div class="container">

        <h2>&copy 1968 adrianseri@hotmail.com</h2>
    </div>
    
</footer>



</html>