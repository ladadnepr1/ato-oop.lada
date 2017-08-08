<?php

class Trolleybus {

    private $number;
    private $production_year;
    private $seats;
    private $driver;

    public function __construct($number, $production_year, $seats, Drivers $driver) {
	$this->driver = $driver;
	$this->number = $number;
	$this->production_year = $production_year;
	$this->seats = $seats;
    }

    public function __toString() {
	$str = 'number:' . $this->number . '<br>production_year:' . $this->production_year;
	$str .= '<br>seats:' . $this->seats . '<br>driver:' . $this->driver;
	return $str;
    }

    public function __clone() {
	if (!empty($this->driver)) {
	    $this->driver = clone $this->driver;
	}
    }

    public function setNumber($number) {
	if ($number) {
	    $this->number = $number;
	}
    }

    public function setYear($production_year) {
	if ($production_year) {
	    $this->production_year = $production_year;
	}
    }

    public function setDriver($driver) {
	if (!empty($driver)) {
	    $this->driver = $driver;
	}
    }

    public function setSeats($seats) {
	if ($seats) {
	    $this->seats=$seats;
	}
    }

}
