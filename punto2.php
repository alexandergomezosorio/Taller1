<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="punto2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>punto2</title>
</head>

<body class="bg-dark text-white">

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
            <li class="nav-item">
              <a class="nav-link" href="calculadora.php">1.Calculadora</a>
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

  <body class="bg-dark text-white">

    <main>
      <div class="container">
        <div class="row d-flex justify-content-center ">
          <div class="col-4">
            <h1>BIENVENIDO</h1>

            <form action="punto2.php" method=POST>
              <input tipe="text" name="nombre" placeholder="Ingresa tu nombre">
              <input type="number" name="estatura" placeholder="Ingresa tu estatura CM" step="0.01">
              <input type="number" name="peso" placeholder="Ingrese su peso KG" step="0.01">
              <div>
              <button type="submit" name="calcular" class="btn btn-primary navbar-dark bg-dark">Calcular</button>
              </div>
            </form>
            <?php
            if (isset($_POST["calcular"])) {
              $peso = $_POST["peso"];
              $estatura = $_POST["estatura"];

              $imc = $peso / ($estatura * $estatura);



              if ($imc < 18.5) {

                echo ("Peso insuficiente");
              } else if ($imc >= 18.5 && $imc <= 24.9) {
                echo ("Peso normal");
              } else if ($imc >= 25 && $imc <= 26.9) {
                echo ("Su IMC es de " . $imc . " Sobrepeso grado I");
              } else if ($imc >= 27 && $imc <= 29.9) {
                echo ("Su IMC es de " . $imc . " Sobrepeso grado II");
              } else if ($imc >= 30 && $imc <= 34.9) {
                echo ("Su IMC es de " . $imc . " Obesidad tipo I");
              } else if ($imc >= 35 && $imc <= 39.9) {
                echo ("Su IMC es de " . $imc . " Obesidad tipo II");
              } else if ($imc >= 40 && $imc <= 49.9) {
                echo ("Su IMC es de " . $imc . " Obesidad tipo III");
              } else if ($imc >= 50) {
                echo ("Su IMC es de " . $imc . " Obesidad tipo IV");
              } else {
                echo ("Revisar datos digitados");
              }
            }

            ?>
          </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>


</html>