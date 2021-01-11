<?php  
/*
TRAITS-:

Traits are a mechanism for code reuse in single inheritance languages such as PHP.
A Trait is intended to reduce some limitations of single inheritance by enabling a developer 
to reuse sets of methods freely in several independent classes living in different class hierarchies.
The semantics of the combination of Traits and classes is defined in a way which reduces complexity, 
and avoids the typical problems associated with multiple inheritance.
*/
 
trait A { 
    public function show() { 
        echo 'Hello World!'; 
    } 
} 
  
class B { 
    use A; 
    public function show() { 
        echo 'Hello Trait!'; 
    } 
} 
  
$obj = new B(); 
$obj->show(); 
?> 