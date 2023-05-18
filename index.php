
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include('includes/header.php') ?>
    </header>
    <main>
        <h2> Datos del Candidato </h2>
        <form action="registrocandidato.php" method="POST">
            Nombre: <input type="text" name="nombre"><br>
            Apellidos: <input type="text" name="apellidos"><br>
            Email: <input type="text" name="email"><br>
            Teléfono: <input type="text" name="telefono"><br>
            Nivel de Estudio: <input type="text" name="ne"><br>
            <input type="submit" value="Enviar">

            <h2> Conocimientos Previos </h2>
            Teléfono: <input type="radio" name="lenguaje" value="Phython"><br>

        </form>

        <?php
           $lenguajes =  [ ];
        ?>

        

        <h1> Nivel de inglés </h1>
        <button>Básico</button>
        <button>Intermedio</button>
        <button>Avanzado</button>


    </main>
    
</body>
</html>
<!-- https://www.youtube.com/watch?v=45MAawcnajs-->