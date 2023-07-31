<?php
include_once ("Models/model.manual.php");
include_once("conexion.php");
BD::crearInstancia();
class controladorManuales{
    public function inicio(){
        include_once("Views/Manuales/view.inicio.php");
    }
    public function crear(){
        if($_POST){
            $titulo=htmlspecialchars($_POST['tituloManual']);
            $nivel=htmlspecialchars($_POST['nivelManual']);
            print_r($_POST);
            Manual::crear($titulo,$nivel);
            //header('location: index.php?controlador=manuales&accion=inicio');
            }
        include_once("Views/Manuales/view.crear.php");
    }
    public function editar(){
        include_once("Views/Manuales/view.editar.php");
    }

}

?>