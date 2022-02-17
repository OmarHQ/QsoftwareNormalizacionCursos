<div class="card">
    <?php //print_r($_POST);?>
    <div class="card-header display-6">
        <?php echo "Asignatura .- ".$resultado['asignatura']." <br/> Sigla.- ". $resultado['sigla']; ?>
    </div>
    <div class="card-body">
       <form action="" method="POST">
            <input type="hidden" name="idA" value="<?php echo $resultado['id'];?>" >
            <div class="row mb-3" id="horarios">
            
            <label for="horarios" class="form-label">Habilite Horarios para la Asignatura</label>  
            <div class="col-md-6 col-sm-12">
            
            <input type="checkbox"  class="btn-check" name="horario[0]" value="1" 
            <?php if(isset($reshorario[0][2]) && $reshorario[0][2]=='ACTIVO'):?>checked<?php endif;?>
            id="btn-check-1-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" for="btn-check-1-outlined" >Turno Manana</label>
            
            <input type="checkbox" class="btn-check" name="horario[1]" value="2" 
            <?php if(isset($reshorario[1][2]) && $reshorario[1][2]=='ACTIVO'):?>checked<?php endif;?>
            id="btn-check-2-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" for="btn-check-2-outlined">Turno Tarde</label>
            
            <input type="checkbox" class="btn-check" name="horario[2]" value="3"
            <?php if(isset($reshorario[2][2]) && $reshorario[2][2]=='ACTIVO'):?>checked<?php endif;?>
            id="btn-check-3-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" for="btn-check-3-outlined">Turno Noche</label>

            </div>
            
            </div>
            
            <input name="" id="" class="btn btn-success" type="submit" value="Modificar">
       </form>
    </div>
    
    
</div>
<div class="w-100">
    <hr/>
</div >
<div class="col col-md-4">
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Horario</th>
            <th>Turno</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($acthorario as $key):?>
        <tr>
            <td><?php echo $key['Horario'];?></td>
            <td><?php echo $key['Turno'];?></td>
            <td><?php echo $key['Estado'];?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
