<?php

/*When many methods are called in a single instruction,
in PHP’s term it is called Method Chaining. 
Each method in class in Method Chaining, that is, the method of the class returns the object of
that class. For Method Chaining, instead of writing value return in class, we have to write 
return $this.
*/


class Chain
{
  private $name="";
  private $age="";
  public function setName($name="")
  {
    $this->name=$name; 
    return $this;
  }
  public function setAge($age="25")
  {
    $this->age=$age;
    return $this;
  }
  public function getInfo()

  {
    echo "My name is ".$this->name." and my age is ".$this->age." years.";
  }
}
$c = new Chain();
$c->setName("abc")->setAge("28")->getInfo();
?>
