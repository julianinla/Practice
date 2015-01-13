<?php 
	class Song {
	
	public $name;
	public $artist;
	public $label;

	function _construct($name, $artist, $label) {
		$this->name=$name;
		$this->artist=$artist;
		$this->label=$label;
	}

	function play() {
		return "{$this->name}"  . "by" . "{$this->artist}" . "plays.";
	}

	function dance() {
		return "People dance to " . "{$this->name}" . " by " . "{$this->artist}" . ".";
	}
}

$song1 = new Song();
$song1->name = "Surrender";
$song1->artist = "Cash Cash";
print "{$song1->dance()}";