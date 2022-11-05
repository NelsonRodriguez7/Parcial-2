<?php
    require_once("models/productos_models.php");
    class contenido_controllers{
        public static function contenido(){
            if(isset($_COOKIE["compra"])){
                header("location:index.php?c=".seg::codificar("pagina_compra")."&m=".seg::codificar("pagina_compra"));
            }
            $title = "Productos | Parcial 2";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contenido/index.php");
            require_once("views/template/footer.php");
        }

        public static function arreglo_productos(){
            $tabla[] = new productos_models(1,"Xiaomi 12 Pro","$899.99", 989.99, 12,"https://i01.appmifile.com/webfile/globalimg/products/responsive/xiaomi-12-pc/bg.jpg");
            $tabla[] = new productos_models(2,"Xiaomi Redmi Note 11 Pro 5G","$249.99", 319.99, 22,"//i01.appmifile.com/webfile/globalimg/products/pc/redmi-note-11-pro-5g-global/p1.jpg");
            $tabla[] = new productos_models(3,"Poco F4 GT","$234.99", 329.99, 10,"//i01.appmifile.com/webfile/globalimg/products/pc/poco-f4-gt/section01.jpg");
            $tabla[] = new productos_models(4,"Xiaomi Mi 11","$256.99", 314.99, 8,"//i01.appmifile.com/webfile/globalimg/products/pc/mi11/img-header.jpg");
            $tabla[] = new productos_models(5,"Xiaomi 12T","$296.99", 354.99, 16,"https://i02.appmifile.com/mi-com-product/fly-birds/xiaomi-12t/pc/img01l.jpg");
            $tabla[] = new productos_models(6,"Xiaomi Mi 11 Lite 5G","$266.99", 335.99, 5,"https://i02.appmifile.com/489_operator_sg/02/11/2021/93c0a9f30ae6c735f9399fae540cb902.jpg");
            return $tabla;
        }
        
    }
?>