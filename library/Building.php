<?php

class Building {

    private $address;
    private $rooms = array();

    public function __construct($address) {
        $this->setAddress($address);
    }

    public function __toString() {
        $str = 'Address:<br>' . $this->address;
        if (empty($this->rooms)) {
            $str .= 'no rooms<br>';
        } else {
            foreach ($this->rooms as $room) {
                $str .= $room;
            }
        }
        return $str;
    }

    public function __clone() {
        if (!empty($this->rooms)) {
            foreach ($this->rooms as $key => $room) {
                $this->rooms[$key] = clone $room;
            }
        }
    }

    public function addRoom(Room $room) {
        if (!empty($room)) {
            $this->rooms[] = $room;
        }
    }

    public function setAddress($address) {
        if (!empty($address)) {
            $this->address = $address;
        } else {
            $this->address = 'no address';
        }
    }

    public function getAddress() {
        return $this->address;
    }

}
