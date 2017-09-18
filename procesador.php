<?php
include_once 'sumador.php';
class procesador{
    function procesar(){
        $objsuma=new sumador();
        $dato1=$_REQUEST ["a"];
        $dato2=$_REQUEST ["b"];
        $objsuma->a=$dato1;
        $objsuma->b=$dato2;
        $objsuma->sumar();
        $dato3=$objsuma->resultado;
        echo $dato3;
    }
}
$miprocesador=new procesador();
?>

