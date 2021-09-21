<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="punto5.css">
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
            <li class="nav-item">
              <a class="nav-link" href="punto4.php">4.Postobon </a>
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

          <h1>Bienvenido</h1>
          <h2> Bancolombia sucursal A</h2>

          <form action="punto5.php" method="POST">

            <div class="mb-3">
              <h4>Ingresa los datos del empleado 1</h4>
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Digita nombre y apellido" name="fila0[nombre]">

              <label class="form-label">Telefono</label>
              <input type="text-number" class="form-control" placeholder="Digita telefono" name="fila0[telefono]">

              <label class="form-label">Direccion</label>
              <input type="text" class="form-control" placeholder="Digite direccion" name="fila0[direccion]">

              <label class="form-label">Salario</label>
              <input type="text-number" class="form-control" placeholder="Digita salario" name="fila0[salario]">
            </div>
            <div class="mb-3">
              <h5>Ingresa los datos del empleado 2</h5>
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Digita nombre y apellido" name="fila1[nombre]">

              <label class="form-label">Telefono</label>
              <input type="text-number" class="form-control" placeholder="Digita telefono" name="fila1[telefono]">

              <label class="form-label">Direccion</label>
              <input type="text" class="form-control" placeholder="Digite direccion" name="fila1[direccion]">

              <label class="form-label">Salario</label>
              <input type="text-number" class="form-control" placeholder="Digita salario" name="fila1[salario]">
            </div>
            <div class="mb-3">
              <h5>Ingresa los datos del empleado 3</h5>
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Digita nombre y apellido" name="fila2[nombre]">

              <label class="form-label">Telefono</label>
              <input type="text-number" class="form-control" placeholder="Digita telefono" name="fila2[telefono]">

              <label class="form-label">Direccion</label>
              <input type="text" class="form-control" placeholder="Digite direccion" name="fila2[direccion]">

              <label class="form-label">Salario</label>
              <input type="text-number" class="form-control" placeholder="Digita salario" name="fila2[salario]">
            </div>
            <div class="mb-3">
              <h5>Ingresa los datos del empleado 4</h5>
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Digita nombre y apellido" name="fila3[nombre]">

              <label class="form-label">Telefono</label>
              <input type="text-number" class="form-control" placeholder="Digita telefono" name="fila3[telefono]">

              <label class="form-label">Direccion</label>
              <input type="text" class="form-control" placeholder="Digite direccion" name="fila3[direccion]">

              <label class="form-label">Salario</label>
              <input type="text-number" class="form-control" placeholder="Digita salario" name="fila3[salario]">
            </div>
            <div class="mb-3">
              <h5>Ingresa los datos del empleado 5</h5>
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Digita nombre y apellido" name="fila4[nombre]">

              <label class="form-label">Telefono</label>
              <input type="text-number" class="form-control" placeholder="Digita telefono" name="fila4[telefono]">

              <label class="form-label">Direccion</label>
              <input type="text" class="form-control" placeholder="Digite direccion" name="fila4[direccion]">

              <label class="form-label">Salario</label>
              <input type="text-number" class="form-control" placeholder="Digita salario" name="fila4[salario]">
            </div>

            <button type="submit" class="btn btn-primary w-100 dark bg-dark" name="enviar">Enviar</button>

          </form>

          <?php
          if (isset($_POST["enviar"])) {
            $fila0 = $_POST["fila0"];
            $fila1 = $_POST["fila1"];
            $fila2 = $_POST["fila2"];
            $fila3 = $_POST["fila3"];
            $fila4 = $_POST["fila4"];

            $totSalA = $fila0["salario"] + $fila1["salario"] + $fila2["salario"] + $fila3["salario"] + $fila4["salario"];
            $totSalB = 40000000;
            $totSalC = 32000000;
            
            echo ("Salarios sucursal A es: " . $totSalA);
            echo ("<br>");
            echo ("Salarios sucursal B es: " . $totSalB);
            echo ("<br>");
            echo ("Salarios sucursal C es: " . $totSalC);
            echo ("<br>");

            $personas = array($fila0, $fila1, $fila2, $fila3, $fila4);
            echo"Salarios sucursal A: ";
            echo "<table border='5'>";
            echo "<tr> <th>Nombre</th>  <th>Telefono</th>  <th>Direccion .</th>  <th>Salario</th> </tr>";

            foreach ($personas as $persona) {
              echo "<tr>";
              foreach ($persona as $columna => $resultado) {
                echo "<td>" . $resultado . "</td>";
              }
              echo ("</tr>");
            }
            echo "</table>";
          }

          ?>


        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>