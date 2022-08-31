<?php


namespace DesignPatterns\Creational\Prototype;
require_once "EmployeePrototype.php";
class WebDeveloper implements EmployeePrototype
{
  public string $name;
  public int $age;
  public int $experienceYears;
  public string $address;
  public array $skills;

  /**
   * WebDeveloper constructor.
   * @param string $name
   * @param int $age
   * @param int $experienceYears
   * @param string $address
   */
  public function __construct(string $name, int $age, int $experienceYears, string $address)
  {
    $this->name = $name;
    $this->age = $age;
    $this->experienceYears = $experienceYears;
    $this->address = $address;
  }

  public function __clone()
  {
    $this->clone();
  }

  public function clone() : self
  {
    // here customize as what you need and return that customized object.
    $clone = new WebDeveloper("No Name", 21, 3, "NULL Address");
    $clone->setSkills(['HTML', 'CSS', 'JS', 'PHP', 'Laravel']);
    return $clone;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @return int
   */
  public function getAge(): int
  {
    return $this->age;
  }

  /**
   * @return int
   */
  public function getExperienceYears(): int
  {
    return $this->experienceYears;
  }

  /**
   * @return string
   */
  public function getAddress(): string
  {
    return $this->address;
  }
  /**
   * @param array $skills
   */
  public function setSkills(array $skills): void
  {
    $this->skills = $skills;
  }




}