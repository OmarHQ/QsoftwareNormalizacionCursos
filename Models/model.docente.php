<?php

class Docente {
    public static function crear($nombre,$apellido){
            $conexionBD=BD::crearInstancia();
            $sql=$conexionBD->prepare("INSERT INTO docentes(id,ApDocente,NomDocente,FechaRegistro) VALUES (null,?,?,CURDATE())");
            $sql->execute(array($apellido,$nombre));
    }
    public static function listar(){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT docentes.id, docentes.ApDocente, docentes.NomDocente, docentes.IdAsignatura, docentes.IdHorario, docentes.FechaRegistro
        FROM docentes
        ");
        $resultado=$sql->execute();
        $resultado=$sql->fetchAll();
        return $resultado;
    }
    public static function asignar($id,$asignaturaDocente, $horarioDocente){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE docentes SET IdAsignatura=$asignaturaDocente, IdHorario=$horarioDocente WHERE Id=$id
        ");
        $resultado=$sql->execute();

    }
    public static function seleccionarPorId($idDocente){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM docentes WHERE id=$idDocente");
        $resultado=$sql->execute();
        $resultado=$sql->fetch();
        return $resultado;
    }
    public static function listarDocentes(){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT docentes.Id, docentes.ApDocente, docentes.NomDocente, asignaturas.Asignatura, 
        horarios.Turno, docentes.FechaRegistro FROM docentes INNER join asignaturas
        on docentes.IdAsignatura=asignaturas.Id INNER JOIN horarios ON docentes.IdHorario=horarios.id
        ");
        $resultado=$sql->execute();
        $resultado=$sql->fetchAll();
        return $resultado;
    }
    public static function buscar($busqueda){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT docentes.Id, docentes.ApDocente, docentes.NomDocente, asignaturas.Asignatura, 
        horarios.Turno, docentes.FechaRegistro FROM docentes INNER join asignaturas
        on docentes.IdAsignatura=asignaturas.Id INNER JOIN horarios ON docentes.IdHorario=horarios.id WHERE ApDocente LIKE'%$busqueda%'
        ");
        $resultado=$sql->execute();
        $resultado=$sql->fetchAll();
        return ($resultado)?$resultado:false;
    }
}
?>