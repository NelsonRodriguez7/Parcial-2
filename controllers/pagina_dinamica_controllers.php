<?php
    require_once("models/productos_models.php");
    class pagina_dinamica_controllers{
        public static function pagina_dinamica(){
            $i = $_GET["i"];
            $title = "Descripcion | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/pagina_dinamica/index.php");
            require_once("views/template/footer.php");
        }
    }
?>