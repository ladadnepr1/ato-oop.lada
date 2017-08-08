<?php
class Aquarium {

    private $volume;
    public $fishes = array();

    public function __construct($volume) {
	$this->volume = $volume;
    }

    public function addFish(Fish $fish) {
	$this->fishes[] = $fish;
    }

    public function __toString() {
	$str = 'v: <br>' . $this->volume . 'fishes:<br>';
	if (empty($this->fishes)) {
	    $str .= 'no fishes';
	} else {
	    foreach ($this->fishes as $fish) {
		$str .= $fish;
	    }
	}
	return $str;
    }
    public function setVolume($volume){
	$this->volume=$volume;
    }
    
    public function __clone() {
	if(!empty($this->fishes)){
	    foreach ($this->fishes as $key=>$fish){
		$this->fishes[$key]=clone $fish;
	    }
	}
	    
    }
    
}
