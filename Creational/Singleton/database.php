<?php


class database
{
  private static int $counter = 0;
  private static $instance;
  private function __construct(){}
  private function __clone(){}

  public static function getInstance(){
    if (is_null(self::$instance))
    {
      self::$instance = new database();
      self::$counter++;
    }

    return self::$instance;
  }

  public function getNumberOfInstances(){
    echo "Number of instances : " . self::$counter;
  }
}


// Testing
$db_1 = database::getInstance();
$db_2 = database::getInstance();
$db_3 = database::getInstance();

$db_3->getNumberOfInstances();     // it will print 1

// try to clone --> will trigger an error
$db_4 = clone $db_3;