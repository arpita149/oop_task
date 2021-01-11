<?php

/* Multiple-Inheritance is the resources of the Object Oriented Programming Languages 
in which child class or subclass can inherit the resources of the multiple parent classes or 
superclasses.

PHP doesn’t support multiple inheritance but by using Interfaces in PHP or using Traits in PHP instead of classes, we can implement it.

Syntax:

            class child_class_name extends parent_class_name {
                   use trait_name;
                     ...
                     ...
                   child_class functions
*/
  

class A { 
  public function show() { 
     echo "It's "; 
  } 
} 
  

trait B { 
  public function display() { 
     echo " Oop Task "; 
  } 
} 
  
class C extends A { 
   use B; 
   public function view() { 
      echo "\n For Assessment"; 
  }  
} 
  
$c = new C(); 
$c->show(); 
$c->display(); 
$c->view(); 
?> 				   