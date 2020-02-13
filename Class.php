<?php

class Person {
  /* Atributes - properties of Object */
  private $firstName;
  private $lastName;
  private $yearBirth;

  /* Consturctor */
  public function __construct($firstName, $lastName, $yearBirth){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->yearBirth = $yearBirth;
  }

  /* def. setters */
  public function setFirstName($firstName){
    $this->firstName = $firstName;
  }

  public function setLastName($lastName){
    $this->lastName = $lastName;
  }

  public function setYearBirth($YearBirth){
    $this->YearBirth = $YearBirth;
  }

  /* def. getters */

  public function getFirstName(){
    return $this->firstName;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function getYearBirth(){
    return $this->YearBirth;
  }

  /* other methods */

  public function getAge(){
    return date("Y") - $this->yearBirth;
  }
}

$person1 = new Person("Karel","Lopata","1956");
echo $person1->getAge();
 ?>
