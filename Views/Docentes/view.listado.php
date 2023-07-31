<div class="row justify-content-between">
    <h6 class="col-sm-12 col-md-8 display-6">
            Listado General de Docentes en Institución
    </h6>
    
                <div class="col-sm-12 col-md-3 align-self-center">
                <form action="" method="post">
                    <div class="d-flex form-inputs"> 
                        <input class="form-control" type="text" name="busqueda" id="busqueda" placeholder="Buscar por apellido">
                        <button type="submit" class="btn btn-light">
                        <span class="ms-2 align-self-center" >
                            <i class="fas fa-search" style="font-size: 20px"></i>
                        </span>
                        </button>
                    </div>
                    </form>
                </div>
   
</div>

<div class="row justify-content-center">
    <table class="table mt-4 table-hover table-light">
        <thead class="table table-primary">
            <tr>
                <th>#</th>
                <th>Apellido(s)</th>
                <th>Nombre(s)</th>
                <th>Asignatura</th>
                <th>Turno</th>
                <th>Fecha de Registro</th>
    
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $dato):?>
                <tr>
                    <td><?php echo $dato['Id']?></td>
                    <td><?php echo $dato['ApDocente']?></td>
                    <td><?php echo $dato['NomDocente']?></td>
                    <td><?php echo $dato['Asignatura']?></td>
                    <td><?php echo $dato['Turno']?></td>
                    <td><?php echo $dato['FechaRegistro']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

