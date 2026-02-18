<?php
interface Animal {
  public function fromFamily();
  public function makeSound();
}

class Cat implements Animal {
  public function fromFamily() {
    echo "From family: Felidae (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
  }
  public function makeSound() {
    echo "Sound: Meow.";
  }
}

class Dog implements Animal {
  public function fromFamily() {
    echo "From family: Canidae (Relatives: wolves, foxes, coyotes, jackals, and domestic dogs).<br>";
  }
  public function makeSound() {
    echo "Sound: Woff.";
  }
}

echo "<h3>Cats</h3>";
$cat = new Cat();
$cat->fromFamily();
$cat->makeSound();

echo "<h3>Dogs</h3>";
$dog = new Dog();
$dog->fromFamily();
$dog->makeSound();
?>