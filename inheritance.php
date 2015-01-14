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

	function getGame() {
		return "A " . $this->type . 
			   "called" . $this->name;
	}
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

$ps4game = new videoGame("The Last of Us", "Action");
print "Video Game is a " . $ps4game­>getGame();

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

$bigroom = new houseMusic("Tsunami", "DVBBS", "Borgeous" , "DOORN Records");
print "Song is " . $bigroom­>getHouse();

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

$republic = new Country("France", "French", "Democratic Republic");
print "Country: " . $republic­>getCountry();
