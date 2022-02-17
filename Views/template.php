<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Plantilla</title>
</head>
<body>

           <nav class="navbar navbar-expand navbar-dark bg-dark mb-4 pb-3">
               <div class="nav navbar-nav">
                   <a class="nav-item nav-link active" href="?controlador=asignaturas&accion=inicio">Inicio <span class="visually-hidden">(current)</span></a>
                   <a class="nav-item nav-link" href="?controlador=asignaturas&accion=crear">Crear Asignatura</a>
                  
                   <a class="nav-item nav-link" href="?controlador=docentes&accion=crear">Registrar Docente</a>
                   <a class="nav-item nav-link" href="?controlador=docentes&accion=listar">Lista Docentes</a>
                   <a class="nav-item nav-link" href="?controlador=manuales&accion=crear">Registrar Manual</a>
                   <a class="nav-item nav-link" href="?controlador=manuales&accion=inicio">Lista Manuales</a>
               </div>
           </nav>
<main class="container">
    <div class="row">
        <div class="col">
            <?php include_once("router.php");?>
        </div>
    </div>
</main>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>