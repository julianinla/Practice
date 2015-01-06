class Games {
	//code goes here
	$game1 = new Game();
	$game2 = new Game();
}

class Car {
	public $name = "name";
	public $color = "color";
	public $owner = "person";
	public $year = 0;
}

$car1 = new Car();
$car1->$name = "Lola";
$car1->$color = "red";

print "I named my " . $car1->name . " car " . $car1->color . "."; 


class Book {
	public function book($comedy, $thriller) {
		//words
	}
}