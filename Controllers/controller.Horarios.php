<?php
include_once ("Models/model.asignatura.php");
include_once ("Models/model.horario.php");
include_once("conexion.php");
BD::crearInstancia();
class controladorHorarios {
    public function inicio(){
        $resultado=Asignatura::seleccionarPorId($_GET['id']);
        //print_r ($resultado['id']);
        $verid=Horario::verificarId($resultado['id']);
        $reshorario=Horario::seleccionarHorarios($resultado['id']);
        $acthorario=Horario::horariosActivos($resultado['id']);
        //print_r($acthorario);
        if (!isset($verid[0])){
         //print_r($verid);
         Horario::crear($_GET['id']);
        }
        if($_POST){
            $idAsignatura=$_POST['idA'];
            if (isset($_POST['horario'])){
                $horario=$_POST['horario'];
                for ($i=0;$i<3;$i++){
                if (isset($horario[$i])){
                Horario::activarHorario($idAsignatura,$horario[$i]);
                }
                else
                Horario::desactivarHorario($idAsignatura,$i);
                }
            }else
            {
                for ($i=0;$i<3;$i++){
                    Horario::desactivarHorario($idAsignatura,$i);
                }
            }
                header('refresh:0');
               //header('location: index.php?controlador=asignaturas&accion=inicio');
            
        }
        include_once("Views/Horarios/view.inicio.php");
    }
}

?>