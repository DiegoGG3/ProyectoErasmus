<?php

    spl_autoload_register('autocargar');

    function autocargar($clase){
        $entities=$_SERVER['DOCUMENT_ROOT']."/proyectoErasmus/entities/".$clase.'.php';
        $repository=$_SERVER['DOCUMENT_ROOT']."/proyectoErasmus/repository/".$clase.'.php';
        $validacion=$_SERVER['DOCUMENT_ROOT']."/proyectoErasmus/helper/".$clase.'.php';
        $interfaz=$_SERVER['DOCUMENT_ROOT']."/proyectoErasmus/interfaz/".$clase.'.php';
        $css=$_SERVER['DOCUMENT_ROOT']."/proyectoErasmus/css/".$clase.'.php';
        $principal=$_SERVER['DOCUMENT_ROOT']."/proyectoErasmus/Principal/".$clase.'.php';




        if(file_exists($entities)){
            require_once $entities;
        }else if(file_exists($repository)){
            require_once $repository;
            
        }else if(file_exists($validacion)){
            require_once $validacion;

        }else if(file_exists($interfaz)){
            require_once $interfaz;

        }else if(file_exists($css)){
            require_once $css;
        }
        else if(file_exists($principal)){
            require_once $principal;

        }else{
            var_dump($repository);
        }
    };

?>