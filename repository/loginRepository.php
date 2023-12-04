<?php
class loginRepository{
   
    public static function iniciarSesion(){
        session_start();
    }
    
    public static function cierraSesion(){
        session_destroy();
    }
    
    public static function guardarSesion($clave, $nombre){
        $_SESSION[$clave]=$nombre;
    }
    
    public static function login($user){
        loginRepository::iniciarSesion();
        loginRepository::guardarSesion('user', $user);
    }
    
    
    public static function estaLog(){
        return isset($_SESSION['user']);
    }
    
    public static function comprobar($clave){
        if(empty ($clave)){
            return "";
        }else{
            return $_SESSION[$clave];
        }
    }
}

?>