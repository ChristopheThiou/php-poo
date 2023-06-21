<?php
use App\Example\Dog;
use App\Example\Person;
use App\Example\Fish;
use App\Example\Zoo;

require '../vendor/autoload.php';


$dog = new Dog("Fido", "Corgi");

$person = new Person("Rico");

$fish = new Fish("Pedro le poisson rouge");

$dog->bark();
$dog->eat();

$person->speak();

$fish->swim();
$fish->breath();

$person1 = new Person("Bobson");
$person2 = new Person("Achour");

$zoo = new Zoo();
$zoo->add($dog);
$zoo->add($fish);
$zoo->add($person1);
$zoo->add($person2);

$zoo->feedAnimals();

var_dump($zoo);


