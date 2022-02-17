<?php

class Manual {
    public static function crear($titulo,$nivel){
            $conexionBD=BD::crearInstancia();
            $sql=$conexionBD->prepare('INSERT INTO manuales(Id,TituloManual,TipoManual) VALUES (null,?,?)');
            $sql->execute(array($titulo,$nivel));
    }

    
}
?>