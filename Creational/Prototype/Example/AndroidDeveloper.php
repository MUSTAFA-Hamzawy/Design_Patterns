<?php


namespace DesignPatterns\Creational\Prototype;


class AndroidDeveloper implements EmployeePrototype
{
  public string $name;
  public int $age;
  public string $address;
  public array $skills;

  /**
   * AndroidDeveloper constructor.
   * @param string $name
   * @param int $age
   * @param string $address
   */
  public function __construct(string $name, int $age, string $address)
  {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
  }

  public function __clone()
  {
    $this->clone();
  }
  public function clone() : self
  {
    // here customize as what you need and return that customized object.
    $clone = new AndroidDeveloper("No Name", 21, "NULL Address");
    $clone->setSkills(['Android Skills']);
    return $clone;
  }

  /**
   * @param array $skills
   */
  public function setSkills(array $skills): void
  {
    $this->skills = $skills;
  }


}