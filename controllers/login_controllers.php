<?php
    class login_controllers{
        public static function login(){
            $title = "Login | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/login/login.php");
            require_once("views/template/footer.php");
        }
    }
?>