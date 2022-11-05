<?php
    require_once("models/productos_models.php");
    class busqueda_controllers{
        public static function busqueda(){
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Busqueda | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/busqueda.php");
            require_once("views/template/footer.php");
        }

        public static function buscar_producto_mostrar(){
            if($_POST){
                $token= $_POST["token"];
                $_SESSION["token"] = $token;

                if (!isset($token) || !seg::validaSesion($token)) {
                    echo "Acceso restringido";
                    exit();
                }
                $obj = new productos_models($_POST["txtBuscar"],"","","","","");
                $buscar = $obj->valida_productos();
                if(count($buscar)>0){
                    $mostrar = $buscar["id_producto"];   
                    header("location:index.php?c=".seg::codificar("pagina_dinamica")."&m=".seg::codificar("pagina_dinamica")."&i=".seg::codificar($mostrar));
                }else
                    header("location:index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda")."&msg=".seg::codificar("ID No Encontrada o No Existe"));
                }
        }
    }
?>