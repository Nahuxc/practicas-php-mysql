<?php

if($_COOKIE["micookie"]){
    unset($_COOKIE["micookie"]); /* podemos borrarla con unset pero tambien hay que caducarla */
    setcookie("micookie", "", time()-100); /* de esta forma hacemos que caduque */
}else{
    echo "no hay cookie para borrar";
}


/* para hacer una redireccion */

header("Location:ver_cookies.php");

?>