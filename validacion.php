
<?php isset($_POST["nombre"]) ? printf("Nombre: %s", $POST["nombre"]) : ""; ?><br>
<?php isset($_POST["apellidos"]) ? printf ("Apellidos: %s", $_POST["apellidos"]) : ""; ?><br>
<?php isset($_POST["email"]) ? printf("Email: %s", $_POST["email"]) : ""; ?><br>
<?php isset($_POST["telefono"]) ? printf("Teléfono: %s", $_POST["telefono"]) : ""; ?>
<?php isset($_POST["ne"]) ? printf("Nivel de Estudios: %s", $_POST["ne"]) : ""; ?><br>


    <!-- if($lenguaje <=2 && (($idioma==1)||($idioma==2)||($idioma==3))){
        header("Location:basico.php")
    } -->

<?php

    $estudiante = [

        'cc' => $_POST["cc"],
        'nombre' => $_POST["nombre"],
        'email' => $_POST["email"],
        'movil' => $_POST["movil"],
        'nivelEstudio' => $_POST["titulo"],
        'lenguajes' => $_POST["lenguajes"],
        'ingles' => $_POST["ingles"],

    ];

    $cantidad = count($_POST["lenguajes"]);
    
    if ($cantidad <= 2 && $_POST["ingles"] == "Basico"){

        header('Location:apolo.php' . $_POST["cc"] . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"] .'&email=' . $_POST["email"] . '&movil=' . $_POST["movil"] . '&nivelEstudio=' . $_POST["titulo"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);

    }
    else if ($cantidad <= 4 && $_POST["ingles"] == "Intermedio"){

        header('Location:artemis.php' . $_POST["cc"] . '&nombre=' . $_POST["nombre"] . '&email=' . $_POST["email"] . '&movil=' . $_POST["movil"] . '&nivelEstudio=' . $_POST["titulo"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);

    }   
    else if ($cantidad <= 6 && $_POST["ingles"] == "Avanzado"){

        header('Location:sputnik.php' . $_POST["cc"] . '&nombre=' . $_POST["nombre"] . '&email=' . $_POST["email"] . '&movil=' . $_POST["movil"] . '&nivelEstudio=' . $_POST["titulo"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);
        
    }

    else {echo "No admitido";}

?>




