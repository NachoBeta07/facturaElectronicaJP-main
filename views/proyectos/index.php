<?php
include("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <h1>Proyectos</h1>
          <form action="../../controllers/insertar.php" method="POST">
              <input type="number" class="form-control mb-3" name="cod_empresa" placeholder="Codigo">
              <input type="number" class="form-control mb-3" name="cod_establecimiento" placeholder="Nombre">
                
              
              <input id="btn_insert" type="submit" name="insert" class="btn btn-primary" value="Guardar">
              <input id="btn_cancel" type="submit" name="cancel" class="btn btn-danger" value="Cancelar">
          </form>
      </div>
      <div class="col-md-8">
        <table class="table">
          <thead class="table-success table-striped">
              <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
               </tr>
          </thead>
          <?php 
            $sql="SELECT * FROM ecmp_proyecto";
            $result=sqlsrv_query($conn,$sql);

            while($mostrar=sqlsrv_fetch_array($result)){
          ?>
            <tbody>
              <td><?php echo $mostrar['cod_proyecto'] ?></td>
              <td><?php echo $mostrar['nom_proyecto'] ?></td>
              
          <?php 
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
      <button type="button" class="btn btn-dark"><i class="bi bi-plus-circle"></i></button>
    </label>
    <label class="btn btn-secondary">
      <button type="button" class="btn btn-dark"><i class="bi bi-trash"></i></button>
    </label>
  </div>

</body>
</html>