<?php
include_once ("Models/model.asignatura.php");
include_once ("Models/model.horario.php");
include_once("conexion.php");
BD::crearInstancia();
class controladorAsignaturas {
    public function inicio(){
        $resultado=Asignatura::listar();
        // echo "<pre>";
        // print_r($resultado);
        // echo "</pre>";
        
        include_once("Views/Asignaturas/view.inicio.php");
    }
    public function crear(){
        if($_POST){
            $asignatura=htmlspecialchars($_POST['asignatura']);
            $sigla=htmlspecialchars(strtoupper(preg_replace('/\s+/','',$_POST['sigla'])));
            //print_r($_POST);
            Asignatura::crear($asignatura,$sigla);
            header('location: index.php?controlador=asignaturas&accion=inicio');
            }
        include_once("Views/Asignaturas/view.crear.php");
    }
    public function editar(){
        include_once("Views/Asignaturas/view.editar.php");
    }

}

?>