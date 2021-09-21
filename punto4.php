<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="punto4.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Taller1</title>
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
              <a class="nav-link" href="calculadora.php"> 1.calculadora</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="punto2.php">2.Body tech</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="punto3.php">3.Spring Step</a>
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
        <div class="col-4">
          <h1>Hola bienvenido</h1>
          <h3>Digita los datos pedidos para el calculo de tu pago semanal</h3>
          <form action="punto4.php" method="POST">
              <input type="text" class="form-control" placeholder="Digita tu nombre y apellido" name="nombre">
              <input type="text-number" class="form-control" placeholder="Digite sus horas lavoradas" name="horas">
              <button type="submit" class="btn btn-primary w-100 dark bg-dark" name="boton">Calcular</button>
          </form>

          <?php
          if (isset($_POST["boton"])) {
            $horas = $_POST["horas"];
            $valHoraDiu = 20000;
            $valHoraExt = 25000;


            if ($horas <= 40 && $horas > 0) {
              $pagoDiu = $valHoraDiu * $horas;
              echo ("No tienes horas extra");
              echo ("<br>");
              echo ("su sueldo es: " . $pagoDiu);
              
            } else if ($horas > 40) {
              $pagoDiu = $valHoraDiu * 40;
              $horaExt = $horas - 40;
              $pagExt = $valHoraExt * $horaExt;
              $tot = $pagoDiu + $pagExt;

              echo ("Tines " . $horaExt . " horas extra");
              echo ("<br>");
              echo ("Valor a pagar horas diurna: " . $pagoDiu);
              echo ("<br>");
              echo ("Valor a pagar horas extra: " . $pagExt);
              echo ("<br>");
              echo ("su total a pagar es: " . $tot);
            }
          }

          ?>

        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>