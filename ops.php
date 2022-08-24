<?php
class Person{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->hp = 100;
    $this->mother = $mother;
    $this->father = $father;

  }
  function sayHi($name) {
    return "Hi, $name, I`m ".$this->name;
  }
  function sethp($hp) {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function gethp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother(){
    return $this->mother;
  }
  function getFather(){
    return $this->father;
  }
  function getInfo(){
    return "
    <h3>A few words about myself</h3><br>"."My name is ".$this->getName()."<br>"."my mother is ".$this->getMother()->name."<br>"."my father is ".$this->getFather()->name
    ;
  }
}
// $medKit = 50;
$alex = new Person("Alex", "Ivanov", 42);
$olga = new Person("Olga", "Ivanova", 42, null, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

$igor = new Person("Igor", "Petrov", 68);

echo $valera->getInfo();

//<h3>A few words about myself</h3><br>"."My name is ".$this->getName()."<br>"."my mother is".$this->getMother()."<br>"."my father is".$this->getFather()