<?php
    require_once("models/usuarios_models.php");
    class login_controllers{
        public static function login(){
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            if(isset($_COOKIE["correo"])){
                $_SESSION["correo"] = $_COOKIE["correo"];
                $_SESSION["nombre"] =$_COOKIE["nombre"];
                header("location:index.php?c=".seg::codificar("contenido")."&m=".seg::codificar("contenido"));
            }
            $title = "Login | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/login/login.php");
            require_once("views/template/footer.php");
        }

        public static function validar() {
            if($_POST){
               
            $obj = new usuario_informacion($_POST["txtCorreo_Usuario"],$_POST["txtContraseña_Usuario"],"","");
            $resultado = $obj->valida_usuario();
            if(count($resultado)>0){
                $_SESSION["correo"] = $resultado["correo"];
                $_SESSION["nombre"] = $resultado["nombre"];
                if(isset($_POST["ckrecordar"])){
                    setcookie("correo",seg::codificar($resultado["correo"]),time()+60);
                    setcookie("nombre",seg::codificar($resultado["nombre"]),time()+60);
                }
                call_user_func("contenido_controllers::contenido");
            }else
                header("location:index.php?c=".seg::codificar("login")."&m=".seg::codificar("login")."&msg=".seg::codificar("Correo o Password incorrecto"));
            }
        }

        public static function cerrar_sesion(){
            session_destroy();
            setcookie("correo",$resultado2["correo"],time()-60);
            setcookie("nombre",$resultado3["nombre"],time()-60);
            header("location:index.php");
        }
    }
?>