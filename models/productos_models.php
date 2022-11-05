<?php
    class productos_models{
        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad_en_existencia;
        private $imagen;

        public function __construct($id_producto, $descripcion, $costo_compra, $precio_venta, $cantidad_en_existencia, $imagen){
            $this->id_producto = $id_producto;
            $this->descripcion = $descripcion;
            $this->costo_compra = $costo_compra;
            $this->precio_venta = $precio_venta;
            $this->cantidad_en_existencia = $cantidad_en_existencia;
            $this->imagen = $imagen;
        }

        public function setId_producto($id_producto){
            $this->id_producto = $id_producto;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setCosto_compra($costo_compra){
            $this->costo_compra = $costo_compra;
        }

        public function setPrecio_venta($precio_venta){
            $this->precio_venta = $precio_venta;
        }

        public function setCantidad_en_existencia($cantidad_en_existencia){
            $this->cantidad_en_existencia = $cantidad_en_existencia;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function getId_producto(){
            return $this->id_producto;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getCosto_compra(){
            return $this->costo_compra;
        }

        public function getPrecio_venta(){
            return $this->precio_venta;
        }

        public function getCantidad_en_existencia(){
            return $this->cantidad_en_existencia;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function valida_productos(){
            $tabla[] = ["id_producto"=>1, "descripcion"=>"Xiaomi 12 Pro", "costo_compra"=>"$899.99", "precio_venta"=>989.99, "cantidad_en_existencia"=>"12", "imagen"=>"https://i01.appmifile.com/webfile/globalimg/products/responsive/xiaomi-12-pc/bg.jpg"];
            $tabla[] = ["id_producto"=>2, "descripcion"=>"Xiaomi Redmi Note 11 Pro 5G", "costo_compra"=>"$249.99", "precio_venta"=>319.99, "cantidad_en_existencia"=>"22", "imagen"=>"//i01.appmifile.com/webfile/globalimg/products/pc/redmi-note-11-pro-5g-global/p1.jpg"];
            $tabla[] = ["id_producto"=>3, "descripcion"=>"Poco F4 GT", "costo_compra"=>"$234.99", "precio_venta"=>329.99, "cantidad_en_existencia"=>"10", "imagen"=>"//i01.appmifile.com/webfile/globalimg/products/pc/poco-f4-gt/section01.jpg"];
            $tabla[] = ["id_producto"=>4, "descripcion"=>"Xiaomi Mi 11", "costo_compra"=>"$256.99", "precio_venta"=>314.99, "cantidad_en_existencia"=>"8", "imagen"=>"//i01.appmifile.com/webfile/globalimg/products/pc/mi11/img-header.jpg"];
            $tabla[] = ["id_producto"=>5, "descripcion"=>"Xiaomi 12T", "costo_compra"=>"$296.99", "precio_venta"=>354.99, "cantidad_en_existencia"=>"16", "imagen"=>"https://i02.appmifile.com/mi-com-product/fly-birds/xiaomi-12t/pc/img01l.jpg"];
            $tabla[] = ["id_producto"=>6, "descripcion"=>"Xiaomi Mi 11 Lite 5G", "costo_compra"=>"$266.99", "precio_venta"=>335.99, "cantidad_en_existencia"=>"5", "imagen"=>"https://i02.appmifile.com/489_operator_sg/02/11/2021/93c0a9f30ae6c735f9399fae540cb902.jpg"];
            foreach($tabla as $t)
            {
                if($this->id_producto == $t["id_producto"])
                    return $t;
            }
            return [];
        
        }

    }
?>