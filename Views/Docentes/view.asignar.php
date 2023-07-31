<div class="row justify-content-center h4">
<div class="card-header col--md-6 text-center">
        <?php echo "Docente .- ".$idDocente['NomDocente']." ". $idDocente['ApDocente']; ?>
        <br/>
        <?php echo "Fecha de Registro .- ".$idDocente['FechaRegistro']; ?>
</div>
</div>

<div class="container mt-4">
    
        <form action="" method="POST">
            <div class="mb-3 row justify-content-center">
                <div class="mb-3 col-md-4">
                  <label for="asignatura" class="form-label">Asignatura</label>
                  
                    <input type="text" class="form-control" name="asignatura" id="asignatura" aria-describedby="helpId" value="<?php echo $idAsignatura['asignatura'];?>" readonly>
                    
                  </div>
                
            </div>
        
            <div class="mb-3 row justify-content-center">
                <div class="mb-3 col-md-4">
                  <label for="horario" classhorario="form-label">Horario</label>
                  <select class="form-select" name="horario" id="horario">
                    <option value="0"></option>
                    <option value="1">Diurno</option>
                    <option value="2">Tarde</option>
                    <option value="3">Noche</option>
                  </select>
                </div>
            </div>
            <div class="mb-3 row justify-content-center" >
            <input name="" id="" class="btn btn-success col-md-3" type="submit" value="Asignar">
            </div>
        </form>
    
</div>

