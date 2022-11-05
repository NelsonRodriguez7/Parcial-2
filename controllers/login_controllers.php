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
                $token= filter_var($_POST["token"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $_SESSION["token"] = $token;

                if (!isset($token) || !seg::validaSesion($token)) {
                    echo "Acceso restringido";
                    exit();
                }

            $usuario= filter_var($_POST["txtCorreo_Usuario"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $Contra= filter_var($_POST["txtContraseña_Usuario"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new usuario_informacion($usuario,$Contra,"","");
            $resultado = $obj->valida_usuario();
            if(count($resultado)>0){
                $_SESSION["correo"] = $resultado["correo"];
                $_SESSION["nombre"] = $resultado["nombre"];
                if(isset($_POST["ckrecordar"])){
                    setcookie("correo",seg::codificar($resultado["correo"]),time()+60);
                    setcookie("nombre",seg::codificar($resultado["nombre"]),time()+60);
                }
                if(isset($_COOKIE["compra"])){
                    header("location:index.php?c=".seg::codificar("pagina_dinamica")."&m=".seg::codificar("pagina_dinamica")."&i=".seg::codificar($_COOKIE["compra"]));
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
            setcookie("compra","",time()-40);
            header("location:index.php");
        }
    }
?>