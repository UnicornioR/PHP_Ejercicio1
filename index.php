
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.4.slim.js" defer></script>
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto+Slab:wght@100;300;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <header>
        <!--<?php include('includes/header.php') ?>-->
    </header>
    <main>
        <div>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                    Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>        

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