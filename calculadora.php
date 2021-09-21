<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="calculadora.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Punto 1 CALCULADORA</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Taller1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <a class="nav-link" href="punto2.php">2.Body tech</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="punto3.php">3.Spring Step</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="punto4.php">4.Postobon </a>
                        </li>
                        <a class="nav-link" href="punto5.php">5.Bancolombia </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4 ">
                    <h1>CALCULADORA</h1>
                    <form action="calculadora.php" method=POST>
                        <div class=" mb-3">

                            <input type="number" name="num1" placeholder="Introduce un número">
                            <input type="number" name="num2" placeholder="Introduce un número">

                            <div class="operacion">
                                <input type="radio" name="operacion" value=suma>Suma
                                <input type="radio" name="operacion" value=resta>Resta
                            </div>
                            <div class="operacion2">
                                <input type="radio" name="operacion" value=multiplicacion>Multiplicación
                                <input type="radio" name="operacion" value=division>División
                            </div>


                        </div>

                        <button type="submit" name="calcular" class="btn btn-primary navbar-dark bg-dark">Calcular</button>

                    </form>
                    <?php
                    if (isset($_POST["calcular"])) {
                        $numero1 = $_POST["num1"];
                        $numero2 = $_POST["num2"];
                        $operacion = $_POST["operacion"];
                        $resultado = "";

                        if ($operacion == "suma") {
                            $resultado = $numero1 + $numero2;
                        }
                        if ($operacion == "resta") {
                            $resultado = $numero1 - $numero2;
                        }
                        if ($operacion == "multiplicacion") {
                            $resultado = $numero1 * $numero2;
                        }
                        if ($operacion == "division") {
                            $resultado = $numero1 / $numero2;
                        }

                        echo " resultado = " . $resultado;
                    } else {
                        echo ("Revisar datos digitados");
                    }
                    ?>

                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>