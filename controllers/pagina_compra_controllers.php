<?php
    require_once("models/productos_models.php");
    class pagina_compra_controllers{
        public static function pagina_compra(){
            if(isset($_COOKIE["compra"])){
                $i = $_GET[$_COOKIE["compra"]];
            }else{
                $i = $_GET["i"];
            }
            $title = "Compra | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/pagina_compra/index.php");
            require_once("views/template/footer.php");
        }
    }
?>