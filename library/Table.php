<?php

class Table {

    private $length;
    private $width;
    private $height;
    private $color;

    public function setLength($length) {
	if ($length > 0) {
	    $this->length = $length;
	}
    }

    public function setWidth($width) {
	if ($width > 0) {
	    $this->width = $width;
	}
    }

    public function setHeight($height) {
	if ($height > 0) {
	    $this->height = $height;
	}
    }

    public function setColor($color) {
	if ($color === 'red' || $color === 'white' || $color === 'black') {
	    $this->color = $color;
	}
    }

    public function showInfo() {
	echo 'length ' . $this->length . '<br>';
	echo 'width ' . $this->width . '<br>';
	echo 'height ' . $this->height . '<br>';
	echo 'color ' . $this->color . '<br>';
    }

}
