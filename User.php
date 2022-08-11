<?php
class User{
    public $name;
    public $secondName;
    public $email;
    public function __construct($name, $secondName, $email){
        $this->name=$name;
        $this->secondName=$secondName;
        $this->email=$email;
    }

}