<?php

include 'methods.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Form 2</title>
    <meta charset="UTF-8">
    <meta name="description" content="This is my first exercise after two years without using PHP">
    <meta name="author" content="Ricardo Alvarado">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/cc1662b9c5.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color:#000000;">
    <header>
    <?php
    include 'navbar.php';
    ?>
    </header>

    <br>
    <div class="col col-4 mx-auto">
        <div class="row">
            <div class="card text-center">
                <div class="card-header lead">
                    CONOCER FACTORIAL | VERIFICAR SI EL NÚMERO ES PRIMO
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <form action="exercise2.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Ingrese un número"
                                    name="numero" min="0" required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-outline-dark col-4 mt-3">
                                    Resultado
                                </button>
                            </div>
                        </div>
                    </form>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <?php

    if(isset($_REQUEST['numero'])) {

        $MathFunction = new MathMethods();

        $MathFunction->factorial($_REQUEST['numero']);
        
        $MathFunction->primeNumber($_REQUEST['numero']);
    }

    ?>


</body>
<footer class="mt-auto text-light">
    <p class="text-center lead">Created by Ricardo, 2022</p>
</footer>

</html>