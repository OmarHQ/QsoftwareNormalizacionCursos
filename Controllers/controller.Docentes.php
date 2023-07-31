<?php
include_once ("Models/model.asignatura.php");
include_once ("Models/model.docente.php");
include_once("conexion.php");
BD::crearInstancia();
class controladorDocentes{
    public function inicio(){
        $asignatura=Asignatura::seleccionarPorId($_GET['id']);
        // echo "<pre>";
        // print_r($asignatura);
        // echo "</pre>";
        $listaAsignaturas=Asignatura::listar();
        //print_r ($listaAsignaturas);
        $resultado=Docente::listar();
        // echo "<pre>";
        // print_r($resultado);
        // echo "</pre>";
        
        //print_r($resultado);
        include_once("Views/Docentes/view.inicio.php");
    }
    public function crear(){
        if($_POST){
            $nombre=htmlspecialchars($_POST['nombreDocente']);
            $apellido=htmlspecialchars($_POST['apellidoDocente']);
            //print_r($_POST);
            Docente::crear($nombre,$apellido);
            //header('location: index.php?controlador=manuales&accion=inicio');
            }
        include_once("Views/Docentes/view.crear.php");
    }
    public function editar(){
        include_once("Views/Docentes/view.editar.php");
    }
    public function asignar(){
        $idDocente=Docente::seleccionarPorId($_GET['idDocente']);
        $idAsignatura=Asignatura::seleccionarPorId($_GET['idAsignatura']);
        if($_POST){
            $id=$idDocente['Id'];
            $asignaturaDocente=$idAsignatura['id'];
            $horarioDocente=$_POST['horario'];
            Docente::asignar($id,$asignaturaDocente,$horarioDocente);
            //print_r($_POST);
        }
       // print_r($idDocente);
        include_once("Views/Docentes/view.asignar.php");
    }
    public function listar(){
        if($_POST){
            $busqueda=htmlspecialchars( $_POST['busqueda']);
            //print_r($busqueda);
            $resBusqueda=Docente::buscar($busqueda);
            if($resBusqueda==false)
            {
                echo "<p class='display-6' style='color:red'>Registro no encontrado</p>";}
            else{
            //print_r($resBusqueda);}
            include_once("Views/Docentes/view.listadoBusqueda.php");    
            }
        }
        $resultado=Docente::listarDocentes();
        //print_r($resultado);
        include_once("Views/Docentes/view.listado.php");
}
}
?>