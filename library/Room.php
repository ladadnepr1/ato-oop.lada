<?php


class Room {

    private $length;
    private $width;
    private $height;
    private $number;
    private $chairs = array();

    public function __construct($length, $width, $height, $number) {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setNumber($number);
        $this->setHeight($height);
    }

    public function __toString() {
        $str = 'Room №'.$this->number.'<br> length: ' . $this->length . '<br> width: ' . $this->width;
        $str .= '<br> height: ' . $this->height . '<br> ';
        $str .= '<br>';
        if (empty($this->chairs)) {
            $str .= ' no chairs<br>';
        } else {
            foreach ($this->chairs as $chair) {
                $str .= $chair .'<br>';
            }
        }

        return $str;
    }

    public function __clone() {
        if (!empty($this->chairs)) {
            foreach ($this->chairs as $key => $chair) {
                $this->chairs[$key] = clone $chair;
            }
        }
    }

    public function addChair(Chair $chair) {
        if(!empty($chair))
        $this->chairs[] = $chair;
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

    public function setNumber($number) {
        if (!empty($number)) {
            $this->number = $number;
        }
    }

    public function getNumber() {
        return $this->number;
    }

}
