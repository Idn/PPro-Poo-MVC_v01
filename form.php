<?php

class Form{

    private $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function input($name){
        echo '<input type="input" name="'.$name.'" placeholder="'.$name.'">';
    }
    public function submit(){
        echo '<button type="submit">Envoyer</button>';
    }

}