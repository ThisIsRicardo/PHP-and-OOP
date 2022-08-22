<!DOCTYPE html>
<html>

<head>
    <title>First Example with PHP</title>
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

    <!-- Button trigger modal -->
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <button type="button" class="btn btn-outline-danger col-2" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                Información
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title lead" id="staticBackdropLabel">INFORMACIÓN DEL ESTUDIANTE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/squidward.jpg" class="img-thumbnail mx-auto d-block" alt="Squidward" width="300"
                        height="300">
                    <br>
                    <h6 class="text-center">Alumno:</h6>
                    <p class="text-center">Douglas Ricardo Menjivar Alvarado</p>

                    <h6 class="text-center">Catedrático:</h6>
                    <p class="text-center">Ing. Sergio Argueta</p>

                    <h6 class="text-center">Asignatura:</h6>
                    <p class="text-center">Técnica Electiva I</p>

                    <h6 class="text-center">Carnet:</h6>
                    <p class="text-center">MA201906</p>

                    <h6 class="text-center">Año:</h6>
                    <p class="text-center">2022</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark align-self-center mx-auto"
                        data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</body>
<footer class="mt-auto text-light">
    <p class="text-center lead">Created by Ricardo, 2022</p>
</footer>

</html>