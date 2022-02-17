<?php

class Horario {
    public static function crear($idAsignatura){
        $conexionBD=BD::crearInstancia();
        for($i=1; $i<=3; $i++){
        $sql=$conexionBD->prepare("INSERT INTO asignatura_horario(id,IdAsignatura,IdHorario,Estado) VALUES (null,?,?,?)");
        $sql->execute(array($idAsignatura,$i,"INACTIVO"));
        }
    }
    public static function seleccionarHorarios($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT IdAsignatura, IdHorario, Estado FROM asignatura_horario WHERE IdAsignatura=$id");
        $resultado=$sql->execute();
        $resultado=$sql->fetchAll();
        return $resultado;
    }
    public static function verificarId($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT IdAsignatura FROM asignatura_horario WHERE IdAsignatura=$id");
        $resultado=$sql->execute();
        $resultado=$sql->fetch();
        return $resultado;
    }
    public static function activarHorario($idAsignatura,$llave){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE asignatura_horario SET Estado='ACTIVO'  WHERE IdAsignatura=$idAsignatura AND IdHorario=$llave");
        $resultado=$sql->execute();
        
    }
    public static function desactivarHorario($idAsignatura,$llave){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE asignatura_horario SET Estado='INACTIVO'  WHERE IdAsignatura=$idAsignatura AND IdHorario=$llave+1");
        $resultado=$sql->execute();
        
    }
    public static function horariosActivos($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT horarios.Horario, horarios.Turno, asignatura_horario.Estado
        FROM horarios
        INNER JOIN asignatura_horario
        ON horarios.id = asignatura_horario.IdHorario
        WHERE asignatura_horario.IdAsignatura=$id");
        $resultado=$sql->execute();
        $resultado=$sql->fetchAll();
        return $resultado;
    }
}
?>