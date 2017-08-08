<?php

class Test {
    public $name;
    private $age;
    public function __construct($name,$age) {
	$this->name=$name;
	$this->age=$age;
    }
public function showInfo(){
    echo 'name '.$this->name.'<br>';
    echo 'age'.$this->age.'<br>';
}
public function setAge($age){
    if($age>0){
	$this->age=$age;
    }
}

}
