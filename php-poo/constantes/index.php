
<?php
/* 

//diferencias entre los 2

self modifica a nivel de clase

this modifica a nivel de objeto

*/


class User{

    /* creacion y valor de la constante */
    const URL_COMPLETA = "http//localhost";


    public $user;
    public $email;
    public $password;

    public function __construct($user, $email, $password){
        $this->user = $user;
        $this->email = $email;
        $this->password = $password;
    }


}


$user = new User("juan243", "nfaid@gmail.com", "1393120");

/* para acceder a la constante se hace de la siguiente manera */

/* llamarla a nivel de objeto */
echo "ESTA ES MI CONSTANTE: ".$user::URL_COMPLETA;

/* tambien podemos llamarla directamente a nivel de clase */
echo "ESTA ES MI CONSTANTE: ".User::URL_COMPLETA;



?>
