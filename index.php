<?php   
    session_start();
    require_once("controllers/bienvenido_controllers.php");
    require_once("controllers/contenido_controllers.php");
    require_once("controllers/pagina_dinamica_controllers.php");
    require_once("controllers/pagina_compra_controllers.php");
    require_once("controllers/login_controllers.php");
    require_once("controllers/busqueda_controllers.php");
    
    require_once("utils/seg.php");

    if (count($_GET)==0)
        call_user_func("bienvenido_controllers::bienvenido");
    else{
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        call_user_func($controlador."_controllers::".$metodo);
        
    }
?>
    
