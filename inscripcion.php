<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inicial</title>
    <link rel="stylesheet" href="inscripcion.css">
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
   <section>
        <h2>Formulario de Inscripción</h2>
        <form>
            <div class="field"> <label> Nombre </label>
                <input type="text" name="nombre"required autocomplete>
             </div>
             <div class="field"> <label> Apellido </label>
                <input type="text" name="apellido"required autocomplete>
             </div>
             <div class="field">
                <label>Ocupacion</label>
                <select>
                    <option selected disabled>Seleccione un valor </option>
                    <option>Estudiante</option>
                      <option>Docente</option>
                      <option>Otro..</option>

                </select>
             </div>
             <div class="field"> <label> Correo </label>
                <input type="email" name="correo"required autocomplete>
             </div>
             <div class="field"> <label> Contraseña </label>
                <input type="password" name="clave"required autocomplete>
             </div>
             <div class="field"> <label> Telefono </label>
                <input type="number" name="telefono"required autocomplete>
             </div>
             </div>
            <div class="textbox">
                <label>Otros Datos</label> <textarea></textarea>
            </div>
            <div class="gustos">
                <label> ¿Quieres recibir informacion sobre los nuevos cursos?</label>
                <div> <input type="radio" name="gustos"required autocomplete>Si </div>
                <div> <input type="radio" name="gustos"required autocomplete>No </div>

            </div>
            <div class="privacidad">
                <input type="checkbox"required>
                <label> He leido y acepto las politicas de privacidad </label>
            </div>
            <div class="submit">
                <button>Enviar</button>
            </div>
        
        
        
        
        
        
        
        






        </form>


    </section>

        

    </main>

<footer class="footer">
    <div class="container">

        <h2>&copy 1968 adrianseri@hotmail.com</h2>
    </div>
    
</footer>
    



































</body>
</html>