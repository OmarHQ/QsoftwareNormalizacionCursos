<div class="card-header display-6">
        <?php echo "Asignatura .- ".$asignatura['asignatura']." <br/> Sigla.- ". $asignatura['sigla']; ?>
</div>
<h3 class="text-center">Lista de Docentes disponibles para Asignar</h3>
<div class="row justify-content-center">
    <table class="table w-auto">
        <thead>
            <tr>
                <th>#</th>
                <th>Apellido(s)</th>
                <th>Nombre(s)</th>
                <th>Detalle</th>
    
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $dato):?>
                <?php if($dato['IdAsignatura']==0): ?>
    
                <tr>
    
                    <td><?php echo $dato['id']?></td>
                    <td><?php echo $dato['ApDocente']?></td>
                    <td><?php echo $dato['NomDocente']?></td>
    
                    <td>
                        <div class="btn-group">
                        <a href="?controlador=docentes&accion=asignar&idDocente=<?php echo $dato['id'];?>&idAsignatura=<?php echo $asignatura['id'];?>" class="btn btn-primary">Detallar & Asignar</a>
                        </div>
                    </td>
                </tr>
                <?php endif;?>
            <?php endforeach;?>
    
        </tbody>
    </table>
</div>
<hr class="w-100" style="height:10px"></hr>
<h3 class="text-center">Lista de Docentes Asignados a <?php echo $asignatura['asignatura'];?> - <?php echo $asignatura['sigla'];?></h3>
<div class="row justify-content-center">
<table class="table w-auto table-info table-hover ">
    <thead>
        <tr>
            <th>#</th>
            <th>Apellido(s)</th>
            <th>Nombre(s)</th>
           <th>Turno</th>
           <th>Fecha de Registro</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $dato):?>
            <?php if($dato['IdAsignatura']==$asignatura['id']): ?>
                
            <tr>
                
                <td><?php echo $dato['id']?></td>
                <td><?php echo $dato['ApDocente']?></td>
                <td><?php echo $dato['NomDocente']?></td>
                <td>
                    <?php  switch($dato['IdHorario']){
                        case 1:
                            echo "Diurno";
                            break;
                        case 2:
                            echo "Tarde";
                            break;
                        case 3:
                            echo "Noche";
                            break;
                    }
                    ?>
                </td>
                <td><?php echo $dato['FechaRegistro']?></td>
                
            </tr>
            <?php endif;?>
        <?php endforeach;?>
        
    </tbody>
</table>
</div>