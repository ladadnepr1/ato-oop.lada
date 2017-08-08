<?php

class Chair {

    private $length;
    private $width;
    private $height;
    private $material;

    public function __construct($length, $width, $height, $material) {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setMaterial($material);
        $this->setHeight($height);
    }

    public function __toString() {
        $str = 'Chair <br> length: ' . $this->length . '<br>width: ' . $this->width;
        $str .= '<br>height: ' . $this->height . '<br>material: ' . $this->material . '<br>';
        return $str;
    }

    public function setLength($length) {
        if ($length > 0) {
            $this->length = $length;
        }
    }

    public function getLenght() {
        return $this->length;
    }

    public function setWidth($width) {
        if ($width > 0) {
            $this->width = $width;
        }
    }

    public function getWidth() {
        return $this->width;
    }

    public function setHeight($height) {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    public function getHeight() {
        return $this->height;
    }

    public function setMaterial($material) {
        if ($material == 'wood' || $material == 'chipboard' || $material == 'plywood') {
            $this->material = $material;
        }
    }

    public function getMaterial() {
        return $this->material;
    }

}
