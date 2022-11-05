<?php
    class bienvenido_controllers{
        public static function bienvenido(){
            $title = "Welcome | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/bienvenido/index.php");
            
        }
    }
?>