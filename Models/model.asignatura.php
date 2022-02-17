<?php

class Asignatura {
    public static function crear($asignatura,$sigla){
            $conexionBD=BD::crearInstancia();
            $sql=$conexionBD->prepare("INSERT INTO asignaturas(id,asignatura,sigla) VALUES (null,?,?)");
            $sql->execute(array($asignatura,$sigla));
            
        
    }

    public static function listar(){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT asignaturas.id, asignaturas.asignatura, asignaturas.sigla
        FROM asignaturas
        ");
        $resultado=$sql->execute();
        $resultado=$sql->fetchAll();
        return $resultado;
    }
    public static function seleccionarPorId($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT id, asignatura, sigla FROM asignaturas WHERE id=$id");
        $resultado=$sql->execute();
        $resultado=$sql->fetch();
        return $resultado;
    }
    
}
?>