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
    <h3>A few words about myself</h3><br>"."My name is ".$this->getName()."<br>"."my mother is ".$this->getMother()->name."<br>"."my father is ".$this->getFather()->name."<br>"."My grandmothers is ".$this->getMother()->getMother()->name." and ".$this->getFather()->getMother()->name."<br>".
    "My grandfathers is ".$this->getMother()->getFather()->name." and ".$this->getFather()->getFather()->name
    ;
  }
}
// $medKit = 50;
$igor = new Person("Igor", "Petrov", 68);
$nata = new Person("Nata", "Petrova", 68);
$petr = new Person("Petr", "Ivanov", 68);
$alisa = new Person("Alisa", "Ivanova", 68);
$alex = new Person("Alex", "Ivanov", 42, $alisa, $petr);
$olga = new Person("Olga", "Ivanova", 42, $nata, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex, );






echo $valera->getInfo();
