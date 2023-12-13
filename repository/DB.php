<?php
class DB
{
    private static $conexion = null;

    public static function abreConexion()
    {
        if (self::$conexion == null) {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            self::$conexion = new PDO('mysql:host=localhost;dbname=proyectoErasmus', 'root', '', $opciones);
        }
        return self::$conexion;
    }

    public static function desconexion()
    {
        self::$conexion = null;
    }

    public static function selectUniversal($conexion, $tabla)
    {
        $resultado = $conexion->query('SELECT * FROM ' . $tabla . ";", MYSQLI_USE_RESULT);
        $objetos = array();
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($objetos, $registro);
        }

        switch ($tabla) {
            case "itemBaremable":
                return itemBaremableRepository::arrayItemBaremables($objetos);
                break;
            case "proyecto":
                return proyectoRepository::arrayProyecto($objetos);
                break;
            case "destinatario":
                return DestinatarioRepository::arrayDestinatarios($objetos);
                break;
            case "convocatoria":
                return convocatoriaRepository::arrayConvocatorias($objetos);
                break;
            case "destinatarioconvocatoria":
                return destinatarioConvocatoriaRepository::arrayDestinatarioConvocatoria($objetos);
                break;
            case "candidatos":
                return candidatoRepository::arrayCandidatos($objetos);
                break;
            case "administrador":
                return administradorRepository::arrayAdministrador($objetos);
                break;
            case "solicitud":
                return SolicitudRepository::arraySolicitudes($objetos);
                break;
            case "solicitud":
                return convocatoriaBaremoRepository::arrayConvocatoriaBaremo($objetos);
                break;
        }
    }
}
