<?php


class Drivers {
    private $firstname;
    private $surname;
    private $age=18;
    private $category='ЭТ';
    public function __construct($firstname,$surname,$age,$category){
	$this->setAge($age);
	$this->setCategory($category);
	$this->setFirstname($firstname);
	$this->setSurname($surname);
    }

    public function __toString() {
	$str = 'firstname: ' . $this->firstname . '<br>' . 'surname: ' . $this->surname . '<br>';
	$str .= 'age: ' . $this->age . '<br>' . 'category: ' . $this->category . '<br>';
	return $str;
    }

    public function setFirstname($firstname) {
	if(!empty($firstname)){
	    $this->firstname = $firstname;
	}
	
    }

    public function setSurname($surname) {
	if($surname){
	    $this->surname = $surname;
	}
	
    }

    public function setAge($age) {
	if($age>=18){
	  $this->age = $age;  
	}
	
    }

    public function setCategory($category) {
	if($category=='ЭТ'|| $category=='ТЭ'){
	    $this->category = $category;
	}
	    
	
    }

    public function getCategory() {
	return $this->category;
    }

    public function getFirstname() {
	return $this->firstname;
    }

    public function getSurname() {
	return $this->surname;
    }

    public function getAge() {
	return $this->age;
    }
    

}
