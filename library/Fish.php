<?php

class Fish {

    private $type;
    private $name;

    public function __construct($type, $name) {
	$this->type = $type;
	$this->name = $name;
    }

    public function __toString() {
	$str = 'type:' . $this->type . '<br> '
		. 'name:' . $this->name . '<br><br>';
	return $str;
    }

    public function setName($name) {
	$this->name=$name;
    }

}
