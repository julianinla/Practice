<?php

//-----------------------------------------------------------Tuesday-------------------------------------------------------------

class videoGame {

	public $name;
	public $type;
	public $motion;
	public $control;


	function __construct($name, $type) {
		$this->name=$name;
		$this->type=$type;
	}

	// function getGame() {
	// 	return "A " . $this->type . 
	// 		   "called" . $this->name;
	// }
}

class wiiGame extends videoGame {

	function play() {
		return $this­>motion”;
	}

}

class ps4Game extends videoGame {

	function game() {
		return $this­>control;
	}

}

// $ps4game = new ps4Game("The Last of Us", "Action");
// print "Video Game is a " . $ps4game­>getGame();

class houseMusic {

	public $name;
	public $artist;
	public $label;
	public $drugs;
	public $jump;

	function __construct($name, $artist, $label) {
		$this->name=$name;
		$this->artist=$artist;
		$this->label=$label;
	}

	function getHouse() {
		return $this->name . 
			   " by " . $this->artist;
	}
}

class acidHouse extends houseMusic {

	function rave() {
		return $this­>drugs;
	}

}

class bigRoom extends houseMusic {

	function dance() {
		return $this­>jump;
	}

}

// $bigroom = new houseMusic("Tsunami", "DVBBS", "Borgeous" , "DOORN Records");
// print "Song is " . $bigroom­>getHouse();

class Country {

	public $name;
	public $people;
	public $continent;
	public $gov;
	public $war;
	public $peace;

	function __construct($name, $people, $gov) {
		$this->name=$name;
		$this->people=$people;
		$this->gov=$gov;
	}

	function getCountry() {
		return $this->name . 
			   " is a " . $this->gov;
	}
}

class republic extends Country {

	function invade() {
		return $this­>war;
	}

}

class dictatorship extends Country {

	function treaty() {
		return $this­>peace;
	}

}

// $republic = new Country("France", "French", "Democratic Republic");
// print "Country: " . $republic­>getCountry();

//--------------------------------------------------------------Wednesday---------------------------------------------------

class Person {
	public $firstName;
	public $lastName;
	public $gender;

	function _construct($firstName, $lastName, $gender) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
	}

	function getName() {
		return $this->firstName . " " . $this->lastName;
	}
}

class Baby extends Person {
	function _construct($firstName, $lastName, $gender, $crawl) {
		parent:_function($firstName, $lastName, $gender);
		$this->crawl=$crawl;
	}

	function move() {
		return $this->crawl;
	}
}

class Adult extends Person {
	function _construct($firstName, $lastName, $gender, $walk) {
		parent:_function($firstName, $lastName, $gender);
		$this->walk=$walk;
	}

	function go() {
		return $this->walk;
	}
}

$baby = new Baby("Seamus", "Archer", "Male", true);
print "Person is " . $baby->getName();

class sportsCar {
	public $name;
	public $maker;
	public $color;
	public $year;

	function _construct($name, $maker, $color, $year) {
		$this->name = $name;
		$this->maker = $maker;
		$this->color = $color;
		$this->year = $year;
	}

	function getModel() {
		return "a " . $this->color . " " . $this->year . " " . $this->maker . " " . $this->name;
	}
}

class muscleCar extends sportsCar {
	function _construct($name, $maker, $color, $year, $blaze) {
		parent:_function($name, $maker, $color, $year);
		$this->blaze=$blaze;
	}

	function drive() {
		return $this->blaze;
	}
}

class superCar extends sportsCar {
	function _construct($name, $maker, $color, $year, $zoom) {
		parent:_function($name, $maker, $color, $year);
		$this->zoom=$zoom;
	}

	function race() {
		return $this->zoom;
	}
}

$supercar = new superCar("XX Internazionale", "Ferrari", "red", "2014", true);
print "Sports car is " . $supercar->getModel();

class Computer {
	public $model;
	public $year;
	public $company;

	function _construct($model, $year, $company) {
		$this->model=$model;
		$this->year=$year;
		$this->company=$company;
	}

	function getComp() {
		return " a" . $this->year . " " . $this->model . " made by " . $this->company;
	}
}

class LapTop extends Computer {
	function _construct($model, $year, $company, $function) {
		parent:_function($model, $year, $company);
		$this->function=$function;
	}

	function work() {
		return $this->function;
	}
}

class DeskTop extends Computer {
	function _construct($model, $year, $company, $perform) {
		parent:_function($model, $year, $company);
		$this->perform=$perform;
	}

	function game() {
		return $this->perform;
	}
}

$laptop = new LapTop("Mac Air", "2014", "Apple", true);
print "My computer is" . $laptop->getComp(); 