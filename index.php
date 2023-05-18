
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Candidatos CAMPUS</title>
</head>
<body>
    <header>
        <?php include('includes/header.php') ?>
    </header>
    <main>
        <h2> Datos del Candidato </h2>
        <form method="POST">
            Nombre: <input type="text" name="nombre"><br>
            Apellidos: <input type="text" name="apellidos"><br>
            Email: <input type="text" name="email"><br>
            Teléfono: <input type="text" name="telefono"><br>
            Nivel de Estudio: <br>
            Bachiller: <input type="radio" name="1"value="basico" >
            Técnico: <input type="radio" name="1" value="intermedio">
            Tecnologo: <input type="radio" name="1" value="avanzado"><br>
            Tecnologo: <input type="radio" name="1" value="avanzado"><br>
            Tecnologo: <input type="radio" name="1" value="avanzado"><br>

            

            <h2> Conocimientos Previos </h2>
            Python: <input type="radio" name="1" ><br>
            CSS: <input type="radio" name="1" ><br>
            C#: <input type="radio" name="1" ><br>
            HTML: <input type="radio" name="1"><br>
            PHP: <input type="radio" name="1" ><br>
            JS: <input type="radio" name="1" ><br>
            NODEJS: <input type="radio" name="1" ><br>
            TypeScript: <input type="radio" name="1"><br>
            
            <h2> Nivel de Inglés </h2>
            Básico: <input type="radio" name="1"value="basico" >
            Intermedio: <input type="radio" name="1" value="intermedio">
            Avanzado: <input type="radio" name="1" value="avanzado"><br>

            <input type="submit" value="Enviar">
        </form>

        <?php
           $lenguajes =  [ ];

        ?>
        
        <!--action="registrocandidato.php"-->
    </main>
    
</body>
</html>
<!-- https://www.youtube.com/watch?v=45MAawcnajs-->