<?php

/*Interface looks like a class but it is not a class. An interface can have methods and variables
just like the class but the methods declared in interface are by default abstract 
Also, the variables declared in an interface are public, static & final by default.
*/

   Interface A {
      public function getName();
      public function getAge();
   }
  abstract class B implements A{
     abstract function getName();
	  public function getAge() {
         echo "My Age is : 20".'<br />';
      }
     }
	 class Child extends B{
      public function getName(){
         echo "abcd";
      }
   }
   $obj = new Child();
   $obj->getAge();
   $obj->getName();
?>
