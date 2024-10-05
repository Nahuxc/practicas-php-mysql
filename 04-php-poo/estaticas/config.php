<?php

/* propiedades o metodos estaticos */

class configStatic{

public static $color;
public static $newsletter;
public static $entorno;

/* 

con self::$variableEstatica

podemos acceder a los valores de las variables estaticas

*/


public static function getColor(){
    return self::$color;
}
public static function setColor($color){
    self::$color = $color;
}


public static function getNewsletter(){
    return self::$newsletter;
}
public static function setNewsletter($newsletter){
    self::$newsletter = $newsletter;
}


public static function getEntorno(){
    return self::$entorno;
}
public static function setEntorno($entorno){
    self::$entorno = $entorno;
}




}


?>