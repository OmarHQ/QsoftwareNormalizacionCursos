<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Sigla</th>
            <th>Horarios Disponibles</th>
            <th>Asignar Docente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $dato):?>
        <tr>
           
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['asignatura'];?></td>
            <td><?php echo $dato['sigla'];?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=horarios&accion=inicio&id=<?php echo $dato['id'];?>" class="btn btn-success">Ver y Modificar</a>
                </div>
            </td>
            <td>
                <div class="btn-group">
                    <a href="?controlador=docentes&accion=inicio&id=<?php echo $dato['id'];?>" class="btn btn-primary">Asignar Docente</a>
                </div>
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="#" class="btn btn-info">Editar</a>
                    <a href="#" class="btn btn-danger">Borrar</a>
                    
                </div>
            </td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
