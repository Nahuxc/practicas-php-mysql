<?php

require_once "ModeloBase.php";

class Nota extends ModeloBase{ //extendemos las funciones que vienen de la clase modelobase

    public $title;
    public $content;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getcontent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }



}


?>
