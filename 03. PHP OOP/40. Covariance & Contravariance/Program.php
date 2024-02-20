<?php
/*

Covariance & Contravariance
Saat kita mengoverride function dari parent class, biasanya child class kita akan membuat function yang dengan function yang di parent.
Covariance memungkinkan kita mengoverride return function yang di parent dengan return value yang lebih spesifik.

Sedangkan Contravariance adalah memperbolehkan sebuah child class untuk 
membuat function argument yang lebih tidak spesifik dibandingkan parentnya.

*/
class Food {}
class AnimalFood extends Food {}
abstract class Animal 
{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(AnimalFood $animalFood): void;
}
class Cat extends Animal 
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void               # tipe data parameter mengikuti milik parent
    {
        echo "Cat is eating" . PHP_EOL;
    }
}
class Dog extends Animal 
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void                     # Contravariance, tipe data parameter lebih general dari kelas AnimalFood
    {                                                               # kelas Food adalah parent dari kelas AnimalFood
        echo "Dog is eating" . PHP_EOL;
    }
}
interface AnimalShelter
{
    function adopt(string $name): Animal;
}
class DogShelter implements AnimalShelter
{
    //function adopt(string $name): Animal
    function adopt(string $name): Dog               # Covariance, return type bisa menggunakan yang lebih spesifik dari Animal
    {                                               # yaitu Dog, turunan dari Animal
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
class CatShelter implements AnimalShelter
{
    function adopt(string $name): Cat               # Covariance, return type bisa menggunakan yang lebih spesifik dari Animal
    {                                               # yaitu Cat, turunan dari Animal
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Kitty");
$cat->eat(new AnimalFood());
var_dump($cat);                                     # $cat adalah bertipe kelas Cat

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food());
var_dump($dog);                                     # $dog adalah bertipe kelas Dog
