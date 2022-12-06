<?php
class front_controller{

    function __construct($ruta){
        
            if(empty($ruta)){

                require_once "views/menu_VI.php";

                $menu_VI= new menu_VI();

                $menu_VI->verMenu();

            }else{

                $arreglo_ruta=explode('/',$ruta);
                $clase=$arreglo_ruta[0];
                $metodo=$arreglo_ruta[1];

                $sufijo = substr($clase,-2);

                if($sufijo == 'VI'){

                    $carpeta = 'views';
                    
                }else if( $sufijo == 'CO'){

                        $carpeta='controllers';

                }else{
                    
                    exit('ERROR: sufijo no enviado');
                }

                require_once $carpeta."/".$clase.".php";

                $instancia = new $clase();
                
                $instancia -> $metodo();
           }

    }
}
?>