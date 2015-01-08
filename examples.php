<?php

//--------------------------------------------------------------Tuesday---------------------------------------------------------

class Game {
	
}

class Car {
	
}

class Book {
	
}

$game1 = new Game();
$game2 = new Game();

$car1 = new Car();
$car2 = new Car();

$book1 = new Book();
$book2 = new Book();

class Game {
	public $name = "name";
	public $publisher = "company";
	public $genre = "genre";
	public $year = 0;
}

class Car {
	public $name = "name";
	public $color = "color";
	public $owner = "person";
	public $year = 0;
}

class Book {
	public $name = "name";
	public $author = "name";
	public $genre = "type";
	public $year = 0;
}

$game1 = new Game();
print $game1->name;

$car1 = new Car();
print $car1->name;

$book1 = new Book();
print $book1->name;

public function myDog( $name, $breed) {

}

public function myCat( $name, $breed) {

}

public function myFriend( $firstName, $lastName) {

}

class Cat {

	public $firstName = “first name”;
	public $lastName = “last name”;
	public $gender = “male”;

	function petName() {
		return “{$this->firstName}” . “{$this->lastName}”;
	}

}

$cat1 = new Cat();
$cat1->firstName = “Whiskers”;
$cat1->lastName = “van Riet”;
print “My cat’s name is {$cat1->petName()}.”;

class DJ {

	public $firstName = “first name”;
	public $lastName = “last name”;
	public $gender = “male”;

	function nickName() {
		return “{$this->firstName}” . “{$this->lastName}”;
	}

}

$dj1 = new DJ();
$dj1->firstName = “Unmet”;
$dj1->lastName = “Ozcan”;
print “That DJ’s name is {$dj1->nickName()}.”;

class Song {

	public $name = “song name”;
	public $genre = “music”;
	public $artist = "artist";

	function songName() {
		return “{$this­>name}”;
	}

}

$song1 = new Song();
$song1->name = “Colors”;
print “That song is {$song1­>songName()}.”;

//-------------------------------------------------------------Wednesday--------------------------------------------------------

class Cat {

	public $firstName;
	public $lastName;
	public $breed;

	function __construct($firstName, $lastName, $breed) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->breed = $breed;
	}

	function petName() {
		return “{$this->firstName}” . “{$this->lastName}”;
	}
}

class Person {

	public $firstName;
	public $lastName;
	public $race;

	function __construct($firstName, $lastName, $race) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->race = $race;
	}

	function guyName() {
		return “{$this->firstName}” . “{$this->lastName}”;
	}
}

class Girl {

	public $firstName;
	public $lastName;
	public $favoriteMusic;

	function __construct($firstName, $lastName, $favoriteMusic) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->favoriteMusic = $favoriteMusic;
	}

	function girlName() {
		return “{$this->firstName}” . “{$this­>lastName}”;
	}
}

$cat1 = new Cat(“Whiskers”, “van Riet”, “Persian”);
print “Cat 1: {$cat1->petName()}\n;

$guy1 = new Guy(“Julian”, “van Riet”, “Caucasian”);
print “Guy 1: {$guy1->guyName()}\n;

$girl1 = new Girl(“Linda”, “Khalaf”, “Dance”);
print “Girl 1: {$girl1->girlName()}\n;

//----------------------------------------------------------Thursday------------------------------------------------------------

// It outputs this because XYZ is a string and 8008 is placed within quotes making it a string, whereas 123 is an integer and 
// false is a boolean

if(is_double(6.07))
echo "It's a decimal";
else 
echo "It's not a decimal";

if(is_integer(666))
echo "It's a number";
else 
echo "It's not a number";

if(is_bool(true))
echo "It's true";
else 
echo "It's false";
