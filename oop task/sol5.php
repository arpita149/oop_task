<?php
/*Dependency injection is a procedure where one object supplies the dependencies of another object.
Dependency Injection is a software design approach that allows avoiding hard-coding dependencies 
and makes it possible to change the dependencies both at runtime and compile time. 
*/

// Constructor Injection

   class Cons {
      private $skills;
      public function __construct($skills){
         $this->skills = $skills;
      }
      public function show(){
         return count($this->skills);
      }
   }
   $createskills = array("PHP", "C", "JAVA");
   $c = new Cons($createskills);
   echo $c->show();
   
   
?>