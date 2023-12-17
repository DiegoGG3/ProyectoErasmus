<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();


for ($i=1; $i < 8; $i=$i+2) { 
    if($i==1){
        $solicitud = BaremacionRepository::crearBaremacion(
            "",
            $_POST["idSolicitud"],
            $_POST["idItem".$i],
            $_POST["valorItem".$i],
            $_POST["documentoNotas"]
        );
    }else if ($i==3) {
        $solicitud = BaremacionRepository::crearBaremacion(
            "",
            $_POST["idSolicitud"],
            $_POST["idItem".$i],
            $_POST["valorItem".$i],
            $_POST["documentoIdiomas"]
        );    
    
    }else{
        $solicitud = BaremacionRepository::crearBaremacion(
            "",
            $_POST["idSolicitud"],
            $_POST["idItem".$i],
            $_POST["valorItem".$i],
            ""
        );     
    }
    
    BaremacionRepository::añadirBaremacion($conexion, $solicitud);
}



?>