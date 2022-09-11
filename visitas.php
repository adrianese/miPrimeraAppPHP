<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inicial</title>
    <link rel="stylesheet" href="estilovisita.css">
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

    <div id="contenedor">
      
        
           
    <h2>Libro de Visitas</h2>
            <form method="GET" action="#">
            <input type="text" class= "field" name= nombre placeholder="Nombre" required>
            <br>
            <textarea name="mensaje" rows="10" cols="25" placeholder="Mensaje"required></textarea>
            <input type="submit" name="Enviar Mensaje">

            <p> EN CONSTRUCCION</p>
    
            </form>
    
  
    </div>
        

        <footer class="footer">
         <div class="container">

        <h2>&copy 1968 adrianseri@hotmail.com</h2>
    </div>
    
</footer>

</body>
</html>