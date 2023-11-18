<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="row m-5">
    <div class="col-12 d-flex align-items-center justify-content-between mb-2">
        <h2>Nómina de Empleados</h2>
        <a class="btn btn-outline-success" href="add.php">Añadir Empleado</a>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped
            table-hover	
            table-dark
            align-middle">
                <thead class="table-light">
                    <caption>Liga de la Justicia</caption>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Sueldo Bruto</th>
                        <th>AFP</th>
                        <th>SFS</th>
                        <th>Total Impuestos</th>
                        <th>ISR</th>
                        <th>Total Descuento</th>
                        <th>Sueldo Neto</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider table-light">
                        <tr class="" >
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td class="text-center">
                                <a class="text-primary" href="edit.php"><i class="bi bi-pencil-square"></i></a>
                                 | 
                                <a class="text-danger" onclick="return confirm('¿Estas seguro que quieres eliminar este registro?')" href="index.php?id="><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
            </table>
        </div>
        
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>